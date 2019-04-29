<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Pārbaudes darbs</title>
	<meta name="description" content="parbaudes darbs">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="css/style.css" rel="stylesheet" media="screen">
 </head>

<body>
	<header>
    		<div class="top">
                <div class="container">
                    <div class="row-fluid">  
                        	<p>   +123456789  <span>demo@demo.com</span></p>
                    </div>
                    
                </div>
            </div>

            <nav>
            	<div class="container">
                	<div class="row-fluid">
                 
                            <div class="span12">
                            	<h1>There are many variations of passages</h1>
                            </div>
                           
                	</div>
            	</div>            
            </nav>
        
            
            <!-- Augša -->
            <div class="slider">
            	<div class="container">
                	<div class="row-fluid">
                    	<div class="span6 offset6">
                        	<!-- Forma -->
                        	<div class="form">
                            	<h2> Contrary to popular belief, lorem ipsum</h2>
                                
                                <form id="contact" method="post" action="demo">                                	
                                	
                                	<div class="row-fluid">
                                		<div class="span6">
                                    		<input type="text" required="" placeholder="First Name" name="Firstname">
                                    	</div>
                                    	<div class="span6">
                                    	    <input type="text" required="" placeholder="Last Name" name="Lastname">
                                   	    </div>
                                    </div>
                                    <div class="row-fluid">
                                    	<div class="span6">
                                    		<input type="email" required="" placeholder=" * Email" name="Email">
                                    	</div>
                                    	<div class="span6">
                                    	    <input type="text" required="" placeholder="Country" name="Country">
                                   	    </div>
                                    </div>	                                    
                                    <div class="row-fluid">
                                    	<div class="span6">
	                                    	<select name="gender" class="input-xlarge">
	                                          <option>Gender</option>
	                                          <option>Female</option>
	                                          <option>Male</option>	                                       
	                                        </select>
                                    	</div>
                                    	<div class="span6">
	                                    	<select name="age" class="input-xlarge">
	                                          <option>Age group</option>
	                                          <option>0-10</option>
	                                          <option>11-30</option>
	                                          <option>31-90</option>
	                                          <option>imortal</option>	                          
	                                        </select>    
                                   	    </div>
                                    </div>
                                    <div class="row4">
                                    	<input type="submit" class="btn button" value="send the info">
                                    </div>		
                                    
                                </form>  
                                <div class="clear"></div>                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Slider -->
    
    </header>
 
	<section class="container test">
        <h2>Pašpārbaudes tests pastāvīgā darba ietvaros</h2>
    	<div  class="row-fluid">
            <?php
            function __($text)
            {
                echo "<li>" . str_replace(['*','-'], '', $text) . "</li>";
            }

            // jautājumu masīvs

            // TODO: aizpildīt ar jautājumiem un uzlikt uz github un ielikt moodlē
            $jautajumi = [
	            [
		            "Nr"        => 1,
		            "Jautajums" => "Pirmais maijs ir oficiāla brīvdiena?",
		            "Tips"      => "radio",
		            "Atbildes"  => [
			            "*Jā",
			            "Nē"
		            ]
	            ],
	            [
		            "Nr"        => 2,
		            "Jautajums" => "Otrais maijs ir brīvs?",
		            "Tips"      => "radio",
		            "Atbildes"  => [
			            "*Nē",
			            "Jā"
		            ]

	            ],
	            [
		            "Nr"        => 3,
		            "Jautajums" => "Ceturtais maijs ir brīvs?",
		            "Tips"      => "radio",
		            "Atbildes"  => [
			            "*Jā",
			            "Nē"
		            ]
	            ],
	            [
		            "Nr"        => 4,
		            "Jautajums" => "Atzīmē valsts oficiālās brīvdienas",
		            "Tips"      => "checkbox",
		            "Atbildes"  => [
			            "*1. maijs",
			            "*23. jūnijs",
			            "-1. marts",
			            "-8. marts"
		            ],

	            ],
	            [
		            "Nr"        => 5,
		            "Jautajums" => "Atzīmē dienas, kas nav svētku dienas",
		            "Tips"      => "checkbox",
		            "Atbildes"  => [
			            "-1. maijs",
			            "-23. jūnijs",
			            "*3. marts",
			            "*23. februāris",
                        "-1. janvāris"
		            ],
	            ],
	            [
		            "Nr"        => 6,
		            "Jautajums" => "Kurus svētkus tradicionāli svin vismaz divas dienas?",
		            "Tips"      => "checkbox",
		            "Atbildes"  => [
			            "*Lieldienas",
			            "-Darba svētkus",
			            "*Ziemassvētkus",
			            "-Jauno Gadu",
			            "-Valentīndienu"
		            ],
	            ],
	            [
		            "Nr"        => 7,
		            "Jautajums" => "Pirmais septembris ir svētku diena?",
		            "Tips"      => "radio",
		            "Atbildes"  => [
			            "*Nē, protams",
			            "Jā"
		            ]
	            ],
	            [
		            "Nr"        => 8,
		            "Jautajums" => "Divdesmitais augusts ierasti ir svētku diena?",
		            "Tips"      => "radio",
		            "Atbildes"  => [
			            "Jā",
			            "*Nē"
		            ]
	            ],
	            [
		            "Nr"        => 9,
		            "Jautajums" => "Tests muļķīgs, vai ne?",
		            "Tips"      => "radio",
		            "Atbildes"  => [
			            "*Jā",
			            "Nē"
		            ]
	            ],
	            [
		            "Nr"        => 10,
		            "Jautajums" => "Testā visi jautājumi bija radoši?",
		            "Tips"      => "radio",
		            "Atbildes"  => [
			            "Jā",
			            "Nē",
                        "*Pilnīgi neviens"
		            ]
	            ],
            ];
            ?>

            <?php
            if(isset($_POST["form_submit"]))
            {
                // saskaitām kopējo punktu skaitu
                $punkti = 0;
                foreach ($_POST as $atbilde)
                {
                    if($atbilde[0] == "*") $punkti++;
                    if ($atbilde[0] == "-") $punkti--;
                }
                echo '<div class="alert alert-success">
                      <strong>Tests izpildīts!</strong> Kopējais punktu skaits: <strong>' . $punkti . '</strong> 
                     </div>';

                // atbilžu izvade
                foreach ($jautajumi as $jautajums):

	                echo '<div class="well well-large">';
                    // puntu summēšana
	                $punkti = 0;
	                $nr = $_POST['Nr' .$jautajums["Nr"]];
	                if(is_array($nr))
	                    {
		                    foreach ($nr as $p)
		                    {
			                    //echo "!" . $_POST['Nr' .$jautajums["Nr"]] . "! ";
			                    if ($p[0] == "*") $punkti++;
			                    if ($p[0] != "*") $punkti--;
		                    }
	                    }
	                else
                        {
	                        if ($nr[0] == "*") $punkti++;
                        }

                    echo "<strong>" .$jautajums["Nr"] . ". jautājums</strong> ($punkti punkti)<br/>" ;
                    echo  $jautajums["Jautajums"] . " <br/>";
	                echo "Atbilžu varianti:<br/>";
                    // atbilžu izdruka

	                foreach ($jautajums["Atbildes"] as $a)
                    {
                        echo __($a ) ;
                    }

	                echo "Pareizā atbilde:<br/>";
	                foreach ($jautajums["Atbildes"] as $a)
	                {
		                if ($a[0] == "*") __($a);
	                }
	                echo "Jūsu izvēle: <br/>";
	                if(is_array($nr))
	                {
		                foreach ($nr as $p)
		                {
			             __($p);
		                }
	                }
	                else
	                {
		                __($nr);
	                }
	                echo '</div>';

                endforeach;


            }

            else {
                // show form
            ?>
                <form action="index.php" method="post" name="test">
                    <input type="hidden" name="form_submit" value="1">
                    <?php
                    // būvējam formu

	            foreach ($jautajumi as $jautajums):

                    if($jautajums["Tips"]=="radio")
                    {
                        echo '<fieldset>';
                        echo '<label><strong>' .$jautajums["Nr"] .'. ' . $jautajums["Jautajums"] .'</strong> </label>';
                        foreach ($jautajums["Atbildes"] as $atbilde)
                        {
                            echo '<label class="radio"><input type="radio" name="Nr'. $jautajums["Nr"].'" value="'. $atbilde. '">'. $atbilde. '</label>';
                        }
                        echo '</fieldset>';
                    }

                    if($jautajums["Tips"]=="checkbox")
                    {
                        echo '<fieldset>';
                        echo '<label><strong>' .$jautajums["Nr"] .'. ' . $jautajums["Jautajums"] .'</strong> </label>';
                        foreach ($jautajums["Atbildes"] as $atbilde)
                        {
                            echo '<label class="checkbox"><input name="Nr'. $jautajums["Nr"].'[]" type="checkbox" value="'. $atbilde. '">'.str_replace('-','', $atbilde) .'</label>';
                          //  echo '<label class="radio"><input type="radio" name="Nr'. $jautajums["Nr"].'" value="">'. $atbilde. '</label>';
                        }
                        echo '</fieldset>';
                    }

                endforeach;
                    ?>


                 <!--   <fieldset>
                        <label>2. Otrais maijs ir brīvs?</label>
                        <label class="radio"><input type="radio" name="Nr2" value="*Nē"> *Nē </label>
                        <label class="radio"><input type="radio" name="Nr2" value="Jā"> Jā </label>
                    </fieldset>

                    <fieldset>
                        <label>3. Ceturtais maijs ir brīvs?</label>
                        <label class="radio"><input type="radio" name="Nr3" value="*Jā">*Jā </label>
                        <label class="radio"><input type="radio" name="Nr3" value="Nē">Nē </label>
                    </fieldset>-->


                    <button type="submit" class="btn btn-primary">Iesniegt testa atbildes</button>
                </form>
          <?php
            }
            ?>
        </div>
    </section>

    <!--Newsletter-->
    <section class="newsletter">
    	<div class="container">
        	<div class="row-fluid">
            	<h2>There are many variations of passages</h2>
                <h3>It uses a dictionary of over 200 Latin words, combined with a hanful of model sentence structures</h3>
            	<div id="loadingNews" style="display: none" class="alert">
	  				<a class="close" data-dismiss="alert">×</a>
	  				Loading
				</div>
            	<div id="responseNews"></div>

            	<form id="newsletter" method="post" action="#">
                   <input type="text" placeholder=" * Name" name="Name">
                   <input type="email" placeholder=" * Email" name="Email">
                   <input type="submit" class="button" value="Send Email">
                </form>
            </div>

        </div>
    </section>
 
    <footer>
    	<div class="container">
        
        	<div class="row-fluid">
            	<div class="span6">
                	<h6>© 2014 Is is a long established fact that reader  /  <a href="#">Official Website</a></h6>
                </div>                
                <div class="span6">
                	<ul class="social">
                    	<li title="" class="tooltip_hover" data-original-title="Linkedin"><a href="#" class="linkedin socialicon"></a></li>
                        <li title="" class="tooltip_hover" data-original-title="Youtube"><a href="#" class="youtube socialicon"></a></li>
                        <li title="" class="tooltip_hover" data-original-title="Facebook"><a href="#" class="facebook socialicon"></a></li>
                        <li title="" class="tooltip_hover" data-original-title="Twitter"><a href="#" class="twitter socialicon"></a></li>                       
                    </ul>
                </div>
                            
            </div>
            
        </div>
    
    </footer>
 
</body></html>