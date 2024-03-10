<?php
session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

</head>
<style>
    .error{ 
    color:red;  
     }
     
    form{
         background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);
         border: 2px dashed black;
    }
    </style>
<body>
    <form action="form-session-save.php" method="post" enctype="multipart/form-data">
<table cellpadding ="5">
<tr>
    <td> First Name: <span style = "color:red" >*</span> </td> 
    <td> <input type= "text"  name="First_name" placeholder ="jitendra" maxlength="50" 
              value= "<?= $_SESSION["First_name"]??'' ?>" >(Max.50 Characters Allowed)

              <?php if(isset($_SESSION["First_name_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["First_name_error"]; 
                               unset($_SESSION["First_name_error"]);
                            ?>
                        </span>

                   <?php }?>
    </td>
</tr> 
<tr>
    <td>Last Name:</td> 
<td><input type="text"  name="last_name" placeholder ="poonia" maxlength="50"
 value="<?= $_SESSION["last_name"]??''?>"  >(Max.50 Characters Allowed)

    
    <?php if(isset($_SESSION["last_name_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["last_name_error"];
                               unset($_SESSION["last_name_error"]);
                            ?>
                        </span>

   <?php }?>
</td>
</tr>

<tr>
<td>Mobile:<span style = "color:red">*</span></td>
 <td><input type="tel"  name ="mobile" placeholder ="72320xxxx" maxlength="10"  
       value= "<?= $_SESSION["mobile"]??''?>">(10 digit Allowed)

       <?php if(isset($_SESSION["mobile_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["mobile_error"];
                               unset($_SESSION["mobile_error"]);
                            ?>
                        </span>

                   <?php }?>
 </td >
</tr>
<tr>
<td>Email: <span style = "color:red">*</span></td>
<td><input type = "email"  name ="email" placeholder ="jitendra@gmail.com"
     value= "<?=($_SESSION["email"]??'')?>" >

     
     <?php if(isset($_SESSION["email_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["email_error"];
                               unset($_SESSION["email_error"]);
                            ?>
                        </span>

                   <?php }?>
</td>
</tr>
<tr>
<td>Gender: <span style = "color:red">*</span></td>
 <td>
     <input type= "radio"  name= "gender" value= "f" <?=(($_SESSION["gender"]??'')=="f")?"checked":"" ?>  >Female
     <input type= "radio"  name= "gender" value= "m" <?=(($_SESSION["gender"]??'')=="m")?"checked":"" ?> >Male
     <input type= "radio"  name= "gender" value= "o" <?=(($_SESSION["gender"]??'')=="o")?"checked":"" ?>  > other

     <?php if(isset($_SESSION["gender_error"])){?>
        <span class = error>
            <?php
            echo $_SESSION["gender_error"];
            unset($_SESSION["gender_error"]);
            ?> 

        </span>
    <?php }?>

     </td>
</tr>
<tr>
   <td> DOB :<span style="color:red">*</span></td>
   <td> <input type="date" name="cutom_date" value="<?= $_SESSION["cutom_date"]??"" ?>"> 
                <?php if(isset($_SESSION["date_error"])) {?>
                    <span class="error">
                        <?php 
                        echo $_SESSION["date_error"];
                        unset($_SESSION["date_error"]);
                        ?>

                    </span>
                    <?php } ?>
    </td>
</tr>

<tr>
<td>Date of Birth(DOB): <span style="color:red">*</span> </td>
<td>
    <select name="dob_day">
   <option >day</option>
   
  
   
    <?php for ($i=1; $i <=31; $i++) { ?>
         
       <option value='<?= $i ?>' <?= ($_SESSION["dob_day"]??"") == $i ? "selected":"" ?> > <?= $i ?> </option>

    <?php } ?>  
</select>

<select name="dob_month">
<option> Month</option>
<?php
       $months=["January","February","March","April","May","June","July","August","September","October","November","December"]; 
       foreach($months as $month) { ?>
    <option value='<?= $month?>'<?= ($_SESSION["dob_month"]??"")== $month ? "selected":"" ?>> <?= $month ?> </option>
<?php } ?> 
 
</select>    

<select name="dob_year">
<option>year</option>
<?php
 for ($i=2000; $i <= date("Y"); $i++) {?> 
         
    <option value='<?= $i ?>'<?= ($_SESSION["dob_year"]??"")==$i ? "selected":"" ?>> <?= $i ?> </option>
    
<?php }?>
</select>
<?php if(isset($_SESSION["dob_error"])){?>
        <span class ="error">
            <?php
            echo $_SESSION["dob_error"];
            unset($_SESSION["dob_error"]);
            ?> 

        </span>
    <?php }?>

</td>
</tr>



<tr>
<td>city:<span style="color:red">*</span> </td>
<td> <input type ="text" name ="city" placeholder="sardarshahar"  maxlength="50"
      value= "<?=($_SESSION["city"]??'')?>"> (Max.50 Characters Allowed)
    
      <?php if(isset($_SESSION["city_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["city_error"];
                               unset($_SESSION["city_error"]);
                            ?>
                        </span>

                   <?php }?>
    
</td>
</tr>
<tr>
<td>Pin Code: <span style="color:red">*</span> </td>
<td> <input type ="text" name ="pincode"  placeholder= 331403 maxlength="6" 
      value= "<?=($_SESSION["pincode"]??'')?>"> (Max.6 digit Allowed)
    
      <?php if(isset($_SESSION["pincode_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["pincode_error"];
                               unset($_SESSION["pincode_error"]);
                            ?>
                        </span>

                   <?php }?>
    
</td>
</tr>
<tr>
<td>State: <span style = "color:red">*</span></td>
<td>
<select type="text" name="state">
    <option value="" seleted disabled>select state</option>
<?php
$states = [ "Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat", "Haryana","Himachal Pradesh",
 "Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland", "Odisha",
 "Punjab","Rajasthan","Sikkim","Tamil Nadu","Telangana","Tripura","Uttarakhand","Uttar Pradesh","West Bengal",
 "Andaman and Nicobar Islands","Chandigarh","Dadra and Nagar Haveli","Daman and Diu","Delhi","Lakshadweep","Puducherry"];
foreach($states as $state){?>
    <option value='<?= $state ?>' <?= ($_SESSION["state"]??"")== $state ? "selected":"" ?> > <?= $state ?> </option>
<?php }?>  
 </select>
 <?php if(isset($_SESSION["state_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["state_error"]; 
                               unset($_SESSION["state_error"]);
                            ?>
                        </span>

                   <?php }?>

</td>
</tr>

<tr>
<td>country:<span style="color:red">*</span></td>
<td>
    <select input type="text" name="country">
         <option value="">Select country</option>
     <?php

$countries = ["Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];
         foreach($countries as $countri){?>
             <option value='<?= $countri ?>' <?= ($_SESSION["country"]??"")== $countri ?"selected":"" ?> ><?=$countri ?> </option>
         <?php }?>
         
</select>
                   <?php if(isset($_SESSION["country_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["country_error"]; 
                               unset($_SESSION["country_error"]);
                            ?>
                        </span>

                   <?php }?>
</td>
</tr>

<tr>
				<td>Address<span style="color:red;">*</span></td>
				<td><textarea name="address" rows="5" cols="20" ><?= $_SESSION["address"] ?? "" ?></textarea>
					<?php if (isset($_SESSION["address_error"])) { ?>
						<span class="error">
							<?php
							echo $_SESSION["address_error"];
							unset($_SESSION["address_error"]);
							?>
						</span>
					<?php } ?>
				</td>
			</tr>


<tr>
<td>Hobbies: 
<span style = "color:red">*</span></td>
<td>
<input type="checkbox" name="hobbies[]" value="drawing" <?= (in_array("drowing", ($_SESSION['hobbies'] ?? []))) ? "checked" : "" ?> > Drawing 
<input type="checkbox" name="hobbies[]" value="singing" <?= (in_array("singing", ($_SESSION['hobbies'] ?? []))) ? "checked" : "" ?> >singing
<input type="checkbox" name="hobbies[]" value="dancing" <?= (in_array("dancing", ($_SESSION['hobbies'] ?? []))) ? "checked" : "" ?> >Dancing
<input type="checkbox" name="hobbies[]" value="sketching" <?= (in_array("sketching", ($_SESSION['hobbies'] ?? []))) ? "checked" : "" ?> >sketching
<input type="checkbox" name="hobbies[]" value="other" <?= (in_array("other", ($_SESSION['hobbies'] ?? []))) ? "checked" : "" ?> >other
<input type="text"  name="other_hobbies" maxlength = "50" placeholder="Ex.Teaching"  value= "<?=($_SESSION["other_hobbies"]??'')?>" >(Max.50 Characters Allowed)

       <?php if(isset($_SESSION["hobbies_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["hobbies_error"];
                               unset($_SESSION["hobbies_error"]);
                            ?>
                        </span>

                   <?php }?>

         <?php if(isset($_SESSION["otherhobbies_error"])){ ?>
                <span class="error">
                    <?php
                       echo $_SESSION["otherhobbies_error"   ];
                       unset($_SESSION["otherhobbies_error"]); 
                    ?>
                </span>
           <?php }?>
</td>
</tr>
<tr>
<td> Qualification:
    <span style = "color:red">*</span></td> 
</td>
    <td>
<input type = "checkbox" name ="Qualification[]" value = "High_school(10th)" 
      <?= (in_array("High_school(10th)",($_SESSION["Qualification"]??[])))? "checked":"" ?> > High School(10th)<br>

<input type = "checkbox" name ="Qualification[]" value = "higher_school(12th)" 
      <?= (in_array("higher_school(12th)", ($_SESSION['Qualification'] ?? []))) ? "checked" : "" ?> > Higher School(12th)<br>

      <input type = "checkbox" name ="Qualification[]" value = "Graduation(Bachelors)"
      <?= (in_array("Graduation(Bachelors)", ($_SESSION['Qualification'] ?? []))) ? "checked" : "" ?> >Graduation (Bachelors)<br>
      <input type = "checkbox" name ="Qualification[]" value = "post_graduation(Masters)"  <?= (in_array("post_graduation(Masters)", ($_SESSION['Qualification'] ?? []))) ? "checked" : "" ?>>post Graduation(Masters)<br>
<input type = "checkbox" name ="Qualification[]" value = "phd"  <?= (in_array("phd", ($_SESSION['Qualification'] ?? []))) ? "checked" : "" ?>>phd 

     <?php if(isset($_SESSION["Qualification_error"])){ ?>
                        <span class="error"> 
                            <?php
                               echo $_SESSION["Qualification_error"];
                               unset($_SESSION["Qualification_error"]);
                            ?>
                        </span>

                   <?php }?>



</td>
</tr>
    
<tr> 
<td>Courses Applied for:
 <span style = "color:red">*</span></td>
 <td>
        <input type = "radio"  name = "course" value= "BCA" <?=(($_SESSION["course"]??'')=="BCA")?"checked":"" ?> >BCA(Bachelor of computer application)<br>
         <input type = "radio"  name = "course" value= "B.COM" <?=(($_SESSION["course"]??'')=="B.COM")?"checked":"" ?> >B.COM(Bachelor of commers)<br>
         <input type = "radio"  name="course" value="B.SC"  <?=(($_SESSION["course"]??'')=="B.SC")?"checked":"" ?> >B.SC(Bachelor of Science)<br>
         <input type = "radio"  name="course" value="BA"  <?=(($_SESSION["course"]??'')=="BA")?"checked":"" ?>>BA(Bachelor of Arts)<br>
         <input type = "radio"  name="course" value="MCA"  <?=(($_SESSION["course"]??'')=="MCA")?"checked":"" ?>>MCA(Master of cumputer application)<br>
         <input type = "radio"  name="course" value="M.SC"  <?=(($_SESSION["course"]??'')=="M.SC")?"checked":"" ?>>M.SC(Master Of Science)<br>
         <input type = "radio"  name="course" value="M.COM"  <?=(($_SESSION["course"]??'')=="M.COM")?"checked":"" ?>>M.COM(Master of Commers)<br>
         <input type = "radio"  name="course" value="MA"  <?=(($_SESSION["course"]??'')=="MA")?"checked":"" ?>>MA(Master Of Art)
        
         <?php if(isset($_SESSION["course_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["course_error"];
                               unset($_SESSION["course_error"]);
                            ?>
                        </span>

                   <?php }?>
            
        
        
        </td>
</tr>
<tr>
   <td>uplod document:<span style = "color:red">*</span></td>
   <td> <input type="file" name="pdf" accept= ".pdf" >
    <?php if(isset($_SESSION["pdf_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["pdf_error"];
                               unset($_SESSION["pdf_error"]);
                            ?>
                        </span>

                   <?php }?>

    Image:<span style ="color:red">*</span>
    <input type="file" name="image" accept="image/*" value='<?= $_SESSION["image"]??"" ?>' >
    <?php if(isset($_SESSION["image_error"])){ ?>
                        <span class="error">
                            <?php
                               echo $_SESSION["image_error"];
                               unset($_SESSION["image_error"]);
                            ?>
                        </span>

                   <?php }?>
            
  
      
        
  </td>

</tr>
<tr>
    <td>website:</td>
    <td><a href="https://www.w3schools.com/">
        <img src="image/JP.jpg" style="width: 80px; height: 100px;" title="visit w3school" alt="jp"> 
    </a></td>
</tr>



 <tr>         
<td></td>
   <td> 
   <button type ="reset">Reset</button>&nbsp;&nbsp;
   <input type = "submit" >
 </td>


</tr>
</table>
    </form>

    <?php
         unset($_SESSION["gender"]);
         unset($_SESSION["First_name"]);
         unset($_SESSION["last_name"]);
         unset($_SESSION["mobile"]);
         unset($_SESSION["email"]);
         unset($_SESSION["cutom_date"]);
         unset($_SESSION["dob_day"]);
         unset($_SESSION["dob_month"]);
         unset($_SESSION["dob_year"]);
          unset($_SESSION["city"]);
         unset($_SESSION["state"]);
         unset($_SESSION["pincode"]);
         unset($_SESSION["country"]);
         unset($_SESSION["address"]);
         unset($_SESSION["hobbies"]);
         unset($_SESSION["other_hobbies"]);
         unset($_SESSION['Qualification']);
         unset($_SESSION['course']);
         unset($_SESSION['pdf']);
         unset($_SESSION['image']);
        
         
    ?>
</body>
</html> 