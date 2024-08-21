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

                case '/add_fruit':
                    if(isset($_REQUEST['submit'])){
                        $name=$_REQUEST['name'];
                        $img=$_FILES['img']['name'];
                        // image upload in project folder
                        $path = 'upload/fruit/' . $img;
                        $tmp_file = $_FILES['img']['tmp_name'];
                        move_uploaded_file($tmp_file, $path);

                        $quantity=$_REQUEST['quantity'];
                        $price=$_REQUEST['price'];

                        $data= array("name" => $name, "img" => $img, "quantity" => $quantity, "price" => $price);

                        $res=$this->insert('fruit',$data);
                        if($res)
					{
						echo "<script>
							alert('Fruit Added Success !');
						</script>";
					}
                    else{
                        echo "<script>
							alert('Fruit Added not !');
						</script>";
                    }
                        
                    }
                    include_once('add_fruit.php');
                    break;

                case '/manage_fruit':
                    $fruit=$this->select('fruit');
                    include_once('manage_fruit.php');
                    break;

                    case '/delete':
			
                        if(isset($_REQUEST['dfruit'])) 
                        {
                            $id=$_REQUEST['dfruit'];
                            
                            $where=array("id"=>$id);
                            $res=$this->delete_where('fruit',$where);
                            if($res)
                            {
                            echo "<script>
                                    alert('Fruit Delete Success !');
                                    window.location='manage_fruit'
                                </script>";
                            }
                        }

                        case '/edit_fruit':

                            if(isset($_REQUEST['editfruit'])) 
                            {
                                $id=$_REQUEST['editfruit'];
                                
                                $where=array("id"=>$id);
                                $res=$this->select_where('fruit',$where);
                                $fetch=$res->fetch_object();
                                
                                if(isset($_REQUEST['save']))
                                {
                                    $name = $_REQUEST['name'];
                                    $quantity = $_REQUEST['quantity'];
                                    $price = $_REQUEST['price'];
                                
                                    if($_FILES['img']['size']>0)
                                    {
                                        // get old_img name
                                        $old_img=$fetch->img;
                                        
                                        $img=$_FILES['img']['name'];	
                                        $path = 'upload/fruit/' . $img;
                                        $tmp_file = $_FILES['img']['tmp_name'];
                                        move_uploaded_file($tmp_file, $path);
                                        
                                      
                                        $data = array("name" => $name , "quantity" => $quantity, "price" => $price ,"img" => $img);
                
                                        $res=$this->update_where('fruit',$data,$where);
                                        if($res)
                                        {
                                            unlink('upload/fruit/'.$old_img);
                                            echo "<script>
                                                alert('fruit Update Success !');
                                                window.location='manage_fruit';
                                            </script>";
                                        }
                                        
                                    }
                                    else
                                    {
                                        $data = array("name" => $name , "quantity" => $quantity, "price" => $price ,"img" => $img);
                                        $res=$this->update_where('fruit',$data,$where);
                                        if($res)
                                        {
                                            echo "<script>
                                                alert('fruit Update Success !');
                                                window.location='manage_fruit';
                                            </script>";
                                        }
                                    }
                                    
                                }
                                
                            }
                            include_once('edit_fruit.php');
                            break;
                            
                    default:
                    echo "<h1 style='color:red;text-align:center'> Page Not Found </h1>";
                    break;

                    
            }

        }
    }
    $obj=new control;
?>

