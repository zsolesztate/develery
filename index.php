<?php include("contact.php"); ?> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="./style.css" type="text/css"/>
<!------ Include the above in your HEAD tag ---------->
<body>
    


<div class="container contact-form">

                    
            <div class="contact-image">
                <img src="./logo.jpg" alt="rocket_contact"/>
            </div>
            <p><span class = "error"><?php echo $sysmsg;?></span></p>
            <form action="#" method="post">
           
                <h3>Dobj nekünk egy üzenetet!</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Neved *" value=""/>
                            <!---span class="text-danger"><?php //if (isset($name_error)) echo $name_error; ?></span-->
                            
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email címed *" value=""/>
                            <!--span class="text-danger"><?php //if (isset($email_error)) echo $email_error; ?></span-->
                           
                        </div>
                     
                        <div class="form-group">
                            <input type="submit" name="submit" class="btnContact" value="Send Message" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Rövid üzeneted *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
</body>