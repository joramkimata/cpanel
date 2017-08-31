<?php
namespace Biggo6\Cpanel\Console\Commands;
use Illuminate\Console\Command;
use File;
use Zipper;
class BiggoCpanel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cpanel:build';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'The tool which make your laravel project ready to be deployed to your web shared hosting file manager (cpanel file manager)';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('');
		$this->info('Laravel 5 Cpanel Deployer! - Building Tool v1.0.0');
		$this->info('Author - Joram Kimata <joramkimata@gmail.com>');
		$this->info('(C) Izweb Technologies LTD');
		$this->info('');
		$this->info('This will build the whole system ready for production. ');
		$ans =  $this->ask('(default: Y or yes): ');
		if($ans == "Y" || $ans == "yes" || $ans == "YES" || $ans == "" || $ans == "y"){
			
			
			$path = base_path() . "/build";
			if(!File::exists($path)){
				$this->info('Creating build folder .....');
				$result = File::makeDirectory($path);
				$this->info('Build folder was created!');		
			}
			
			$this->info('');
			$this->info('Let Us Go Together!');
			$this->info('');
			$this->info('...');

			$files = glob(base_path() . '/app');
			Zipper::make(base_path() . '/build/site/app.zip')->add($files)->close();
			$path2 = base_path() . '/build/site/app';		
			if(!File::exists($path2)){
				$this->info('... ...');
				$result = File::makeDirectory($path2);	
			}	
			Zipper::make(base_path() . '/build/site/app.zip')->extractTo(base_path() . '/build/site/app');

			$filesX_ = glob(base_path() . '/config');
			Zipper::make(base_path() . '/build/site/config.zip')->add($filesX_)->close();
			$path2X_ = base_path() . '/build/site/config';		
			if(!File::exists($path2X_)){
				$this->info('... ...');
				$result = File::makeDirectory($path2X_);	
			}	
			Zipper::make(base_path() . '/build/site/config.zip')->extractTo(base_path() . '/build/site/config');

			$filesX_2 = glob(base_path() . '/database');
			Zipper::make(base_path() . '/build/site/database.zip')->add($filesX_2)->close();
			$path2X_2 = base_path() . '/build/site/database';		
			if(!File::exists($path2X_2)){
				$this->info('... ...');
				$result = File::makeDirectory($path2X_2);	
			}	
			Zipper::make(base_path() . '/build/site/database.zip')->extractTo(base_path() . '/build/site/database');
			
            $filesX_21 = glob(base_path() . '/resources');
			Zipper::make(base_path() . '/build/site/resources.zip')->add($filesX_21)->close();
			$path2X_21 = base_path() . '/build/site/resources';		
			if(!File::exists($path2X_21)){
				$this->info('... ...');
				$result = File::makeDirectory($path2X_21);	
			}	
			Zipper::make(base_path() . '/build/site/resources.zip')->extractTo(base_path() . '/build/site/resources');

            $filesX_21_ = glob(base_path() . '/routes');
			Zipper::make(base_path() . '/build/site/routes.zip')->add($filesX_21_)->close();
			$path2X_21_ = base_path() . '/build/site/routes';		
			if(!File::exists($path2X_21_)){
				$this->info('... ...');
				$result = File::makeDirectory($path2X_21_);	
			}	
			Zipper::make(base_path() . '/build/site/routes.zip')->extractTo(base_path() . '/build/site/routes');

            $filesX_21_1 = glob(base_path() . '/storage');
			Zipper::make(base_path() . '/build/site/storage.zip')->add($filesX_21_1)->close();
			$path2X_21_1 = base_path() . '/build/site/storage';		
			if(!File::exists($path2X_21_1)){
				$this->info('... ...');
				$result = File::makeDirectory($path2X_21_1);	
			}	
			Zipper::make(base_path() . '/build/site/storage.zip')->extractTo(base_path() . '/build/site/storage');

            $filesX_21_12 = glob(base_path() . '/tests');
			Zipper::make(base_path() . '/build/site/tests.zip')->add($filesX_21_12)->close();
			$path2X_21_12 = base_path() . '/build/site/tests';		
			if(!File::exists($path2X_21_12)){
				$this->info('... ...');
				$result = File::makeDirectory($path2X_21_12);	
			}	
			Zipper::make(base_path() . '/build/site/tests.zip')->extractTo(base_path() . '/build/site/tests');


			$this->info('... ... ...');
			$files_ = glob(base_path() . '/bootstrap');
			Zipper::make(base_path() . '/build/site/bootstrap.zip')->add($files_)->close();
			$path2_ = base_path() . '/build/site/bootstrap';		
			if(!File::exists($path2_)){
				$this->info('... ... ... ...');
				$result = File::makeDirectory($path2_);	
			}	
			Zipper::make(base_path() . '/build/site/bootstrap.zip')->extractTo(base_path() . '/build/site/bootstrap');
			$this->info('... ... ... ... ....');
			$filesu = glob(base_path() . '/vendor');
			Zipper::make(base_path() . '/build/site/vendor.zip')->add($filesu)->close();
			$path2__ = base_path() . '/build/site/vendor';		
			if(!File::exists($path2__)){
				$this->info('... ... ... ... .... ....');
				$result = File::makeDirectory($path2__);	
			}	
			Zipper::make(base_path() . '/build/site/bootstrap.zip')->extractTo(base_path() . '/build/site/bootstrap');
			$this->info('');
			$filesxx = glob(base_path() . '/public');
		    Zipper::make(base_path() . '/build/site/public.zip')->add($filesxx)->close();
			$path2x = base_path() . '/build/site/public';		
			if(!File::exists($path2x)){
				$this->info('... ... ... ... .... ....');
				$result = File::makeDirectory($path2x);	
			}	
			$this->info('....... ....... ');
			$this->info('....... ....... ');
			$this->info('....... ....... ');
			Zipper::make(base_path() . '/build/site/public.zip')->extractTo(base_path() . '/build');
			$this->info('....... ....... ');
			$this->info('....... ....... ');
			$this->info('....... ....... ');
			$this->info('... ... ... ... .... ....');
			$this->info('At middle of Something ......');
			$this->info('... ... ... ... .... ....');
			$this->info('');
			$files2 = glob(base_path() . '/composer.json');
			Zipper::make(base_path() . '/build/site/composer.json')->add($files2)->close();			
			Zipper::make(base_path() . '/build/site/composer.json')->extractTo(base_path() . '/build/site');
			
			$this->info('');
			$this->info('');
			$this->info('Housing Keeping ......');
			$this->info('');
			try{
				$old = getcwd();
            	chdir(base_path() . '/build/site/');
            	unlink('app.zip');
            	unlink('bootstrap.zip');
            	unlink('public.zip');
            	unlink('vendor.zip');
            	//unlink('version.json.zip');
            	unlink('composer.json.zip');
            	
			}catch(Exception $x){
				//$this->info('Error ' . $x->getMessage());
			}finally{
				chdir($old);
				$this->info('....... ....... ...... ......');
				$content_1 = @file_get_contents( base_path() . "/index.php.build");
				$content_2 = @file_get_contents( base_path() . "/database.php.build");
				
				file_put_contents(base_path() . "/build/index.php" , $content_1);
				file_put_contents(base_path() . "/build/site/config/database.php" , $content_2);
				
				$sourceDir = base_path() . "/vendor";
				$destinationDir = base_path() . '/build/site/vendor';
				File::copyDirectory($sourceDir, $destinationDir);
				
				
				$this->info('......Finilizing things .....');
				$this->info('');
				try{
					
	            	
				}catch(Exception $x2){
					//$this->info('Error ' . $x2->getMessage());
				}finally{
					$this->info('... ... .... ....');
					$this->info('');
					$this->info('');
					
					$ansx =  $this->ask('(We zipping?): 1, 0 >>: ');
					$this->info('');
					$this->info('');
					if($ansx == 1){
						$filesx = (base_path() . "/build");
						$this->info('....... ...ZIPPING NOW... ........');
						$this->info('');
						$this->info('');
						Zipper::make(base_path() . "/build.zip")->add($filesx)->close();
						$this->info('....... ...FINISHED - ZIPPING PROCESS... ........');
						$this->info('');
						$this->info('');
						$this->info('....... ....... ');
						$this->info('....... ....... ');
						$this->info('....... ....... ');
						
					}
					
	
			  		$this->info('===========================================');
					$this->info('Successfully...!');
					$this->info('===========================================');
				}
				
			}
			
			
			
		}else{
			$this->info('Aborted!');
			return;
		}
    }
}
