<?

$cfg['blowfish_secret'] = 'nc2xHeD]6MupYugMy.n9WrSr5MSYoPCE';// YOU MUST FILL IN THIS FOR COOKIE AUTH!

//Servers configuration
$i = 0;

//First server
$i++;

//Authentication type
$cfg['Servers'][$i]['auth_type'] = 'cookie';

// Server parameters
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;

// User used to manipulate with storage
$cfg['Servers'][$i]['controluser'] = 'root';
$cfg['Servers'][$i]['controlpass'] = '';

//Directories for saving/loading files from server
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
?>