<body background="<?php echo $site_url;?>app/views/img/background5.jpg">

<?php
include($this->view_path('check_login'));
include($this->view_path('header'));

ob_start();

header('Content-Type:text/html;charset=utf-8');
$file = str_replace('\\','/',dirname(__FILE__)).'/';
$fpath = isset($_GET['path']) ? $_GET['path'] : "";
$path=str_replace('\\','/',dirname(__FILE__)).'/';
echo "文件绝对路径:".$file.'</br></br>';
myfile($file);

if($fpath!=""){
    !$path && $path = '.';
    $paths=str_replace('//','/',$_GET['path']);
    $path1=str_replace('//','/',opath($path,$paths));
    ob_end_clean();
    echo "文件绝对路径:".$path1.'</br></br>';
    myfile($path1);
}

function opath($scriptpath,$nowpath) {
    if ($nowpath == '.') {
        $nowpath = $scriptpath;
    }
    $nowpath = str_replace('\\', '/', $nowpath);
    $nowpath = str_replace('//', '/', $nowpath);
    if (substr($nowpath, -1) != '/') {
        $nowpath = $nowpath.'/';
    }
    return $nowpath;
}

function myfile($file){

 $dir = opendir($file);
   while (false != $read = readdir($dir)){

       $filestr = strlen($read) > 50 ? substr($read,0,50) : $read;
       $filedir = $file.$read;
       $mydir = is_dir($filedir);
       if($mydir==1){
           if($read!='.'){
               if($read=='..'){
                    echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="?home.file&path='.(uppath($filedir)).'"><b>[返回上级目录]</b></a><br />';
               }else{
                   $dirw=is_writable($filedir) ? "可写目录" : "不可写目录";
                   echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="?home.file&path='.($filedir).'">'."$filestr".'</a>------'.$dirw.'<br />';
               }
           }
       }
   }
@closedir($file);
 $dir = opendir($file);
   while (false != $read = readdir($dir)){
        $filestr = strlen($read) > 50 ? substr($read,0,50) : $read;
       $filedir = $file.$read;     
       $mydir = is_dir($filedir);
       $pathg=str_replace('\\', '/', dirname(__FILE__)).'/';
      #$fileurl = str_replace($pathg,'',$file);
       if($mydir==0){
           if($mydir!='.'){
		$x_path = str_replace($_SERVER['DOCUMENT_ROOT'],'',$filedir);
		$x_path = str_replace($filestr,'',$x_path);
		#echo $x_path."===========";
		#echo $filedir;
		$filedate = date("Y-m-d H:i:s",filectime($filedir));
		# echo '<a href="./'.$x_path.'/'.$filestr.'" target="_blank">'.$filestr.'</a> ------'.$filedate.'&nbsp;&nbsp;&nbsp;&nbsp;<a id="modal-947598" href="#modal-container-947598?file_url='.$file.$filestr.'" role="button" class="btn" data-toggle="modal">文件预览</a><br />';
		$long_str_1="&nbsp;&nbsp;&nbsp;&nbsp;<a id='modal-947601'  href='#'  role ='button'  class='btn'  onclick ='";
		$long_str_2='preview("'.$file.$filestr.'")';
		$long_str_3="' data-toggle='modal' >文件预览</a><br />";
	    echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="./'.$x_path.'/'.$filestr.'" target="_blank">'.$filestr.'</a> ------'.$filedate.$long_str_1.$long_str_2.$long_str_3;
		#data-target="#modal-container-947598"
		#preview($filestr)
           }
       }
   }
@closedir($file);
}
function  uppath($filedir){
    $pathdir = explode('/',$filedir);
    $num = count($pathdir);
    if($num > 2){
        unset($pathdir[$num-1],$pathdir[$num-2]);
    }
    $uppfile = implode('/',$pathdir).'/';
    return $uppfile;
   
}



?> 

<script type="text/javascript">

			function preview(filestr)
			{
			//alert('test');
			params='?home.file_read&file_url='+filestr;
			//alert (filestr);
			//alert (params);
			$.get(params, function(result)
				{
				$(".modal-body p").text(result)
				$('#modal-container-947598').modal('show');
				}
				);
			};		



</script>

			<div id="modal-container-947598" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		
			



				<div class="modal-header">
					 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">
						文件预览
					</h3>
				</div>
				<div class="modal-body" id="container">
					<p>
			
			
					</p>
				</div>
				<div class="modal-footer">
					 <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
					<!-- <button class="btn btn-primary">保存设置</button> -->
				</div>
			</div>

</body>
