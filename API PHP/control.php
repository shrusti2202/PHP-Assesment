<?php
    include_once('model.php');

    class control extends model
    {
        function __construct()
        {
            model :: __construct();
            $url = $_SERVER['PATH_INFO'];

            switch($url)
            {
                case '/index':
                    include_once('index.php');
                    break;

                case '/add_students':
                    if(isset($_REQUEST['submit'])){
                        $name=$_REQUEST['name'];
                        $img=$_FILES['img']['name'];
                        // image upload in project folder
                        $path = 'upload/students/' . $img;
                        $tmp_file = $_FILES['img']['tmp_name'];
                        move_uploaded_file($tmp_file, $path);

                        $class=$_REQUEST['class'];
                        $roll=$_REQUEST['roll'];

                        $data= array("name" => $name, "img" => $img, "class" => $class, "roll" => $roll);

                        $res=$this->insert('students',$data);
                        if($res)
					{
						echo "<script>
							alert('students Added Success !');
						</script>";
					}
                    else{
                        echo "<script>
							alert('students Added not !');
						</script>";
                    }
                        
                    }
                    include_once('add_students.php');
                    break;

                case '/manage_students':
                    $students=$this->select('students');
                    include_once('manage_students.php');
                    break;

                    case '/delete':
			
                        if(isset($_REQUEST['dstudents'])) 
                        {
                            $id=$_REQUEST['dstudents'];
                            
                            $where=array("id"=>$id);
                            $res=$this->delete_where('students',$where);
                            if($res)
                            {
                            echo "<script>
                                    alert('students Delete Success !');
                                    window.location='manage_students'
                                </script>";
                            }
                        }

                        case '/edit_students':

                            if(isset($_REQUEST['editstudents'])) 
                            {
                                $id=$_REQUEST['editstudents'];
                                
                                $where=array("id"=>$id);
                                $res=$this->select_where('students',$where);
                                $fetch=$res->fetch_object();
                                
                                if(isset($_REQUEST['save']))
                                {
                                    $name = $_REQUEST['name'];
                                    $class = $_REQUEST['class'];
                                    $roll = $_REQUEST['roll'];
                                
                                    if($_FILES['img']['size']>0)
                                    {
                                        // get old_img name
                                        $old_img=$fetch->img;
                                        
                                        $img=$_FILES['img']['name'];	
                                        $path = 'upload/students/' . $img;
                                        $tmp_file = $_FILES['img']['tmp_name'];
                                        move_uploaded_file($tmp_file, $path);
                                        
                                      
                                        $data = array("name" => $name , "class" => $class, "roll.no" => $roll.no ,"img" => $img);
                
                                        $res=$this->update_where('students',$data,$where);
                                        if($res)
                                        {
                                            unlink('upload/students/'.$old_img);
                                            echo "<script>
                                                alert('students Update Success !');
                                                window.location='manage_students';
                                            </script>";
                                        }
                                        
                                    }
                                    else
                                    {
                                        $data = array("name" => $name , "class" => $class, "roll.no" => $roll.no ,"img" => $img);
                                        $res=$this->update_where('students',$data,$where);
                                        if($res)
                                        {
                                            echo "<script>
                                                alert('students Update Success !');
                                                window.location='manage_students';
                                            </script>";
                                        }
                                    }
                                    
                                }
                                
                            }
                            include_once('edit_students.php');
                            break;

                             // =====================GET students==========================
     
		     case '/students_get':	
				$res=$this->select('students');
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No students Found.", "status" => false));
				}
		     break;
	
			// =======================POST students======================		
			 case '/students_post':			
				$data = json_decode(file_get_contents("php://input"), true);

				$name = $data["name"];
                $img = $data["img"];
                $class = $data["class"]; 
                $roll = $data["roll"];	
				
				$arr=array("name"=>$name,"img"=>$img,"class"=>$class,"roll"=>$roll,);
				
				$res=$this->insert('students',$arr);
				if($res or die("Insert Query Failed"))
				{
					echo json_encode(array("message" => " students Inserted Successfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "Failed  students Not Inserted ", "status" => false));	
				}
		 	 break;
	
			// =======================PATCH students======================
			 case '/students_patch':	
				$data = json_decode(file_get_contents("php://input"), true);
			
				$id = $data["id"];
				$name = $data["name"]; 	
                $img = $data["img"];
                $class = $data["class"]; 
                $roll = $data["roll"];				
				
				$arr=array("name"=>$name,"img"=>$img,"class"=>$class,"roll"=>$roll,);
				$where=array("id"=>$id);
				
				$res=$this->update_where('students',$arr,$where);
				
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "students Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed students Not Update", "status" => false));	
				}
		     break;	
	
			// =======================DELETE  students================
			 case '/students_delete':	
				$data = json_decode(file_get_contents("php://input"), true);
				$id = $data["id"];
				// $id = $_GET['id'];
				$where=array("id"=>$id);
				$res=$this->delete_where('students',$where);
				if($res or die("Delete Query Failed"))
				{	
					echo json_encode(array("message" => "students Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed students Not Deleted", "status" => false));	
				}
			 break;
                            
                    default:
                    echo "<h1 style='color:red;text-align:center'> Page Not Found </h1>";
                    break;

                    
            }

        }
    }
    $obj=new control;
?>

