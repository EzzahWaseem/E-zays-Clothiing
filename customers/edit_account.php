		<?php 	
				include("includes/db.php"); 
				
				$user = $_SESSION['customer_email'];
				
				$get_customer = "select * from customer where customer_email='$user'";
				
				$run_customer = mysqli_query($con, $get_customer); 
				
				$row_customer = mysqli_fetch_array($run_customer); 
				
				$c_id = $row_customer['customer_id'];
				$name = $row_customer['customer_name'];
				$email = $row_customer['customer_email'];
				$pass = $row_customer['customer_pass'];
				$country = $row_customer['customer_country'];
				$city = $row_customer['customer_city'];
				$contact = $row_customer['customer_contact'];
				$address= $row_customer['customer_address'];
				$image = $row_customer['customer_image'];
				
				
		?>
			
		<form action="" method="post" enctype="multipart/form-data">
					
					<table align="center" width="750">
						
						<tr align="center">
							<td colspan="6"><h2>Update your Account</h2></td>
						</tr>
						
						<tr>
							<td align="right">Customer Name:</td>
							<td><input type="text" name="c_name" value="<?php echo $name;?>" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Email:</td>
							<td><input type="text" name="c_email" value="<?php echo $email;?>" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Password:</td>
							<td><input type="password" name="c_pass" value="<?php echo $pass;?>" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Image:</td>
							<td><input type="file" name="c_image"/><img src="../images/<?php echo $image; ?>" width="50" height="50"/></td>
						</tr>
						
						
						
						<tr>
							<td align="right">Customer Country:</td>
							<td>
	<select name="c_country" disabled>
	<option value='Ascension Island'>Ascension Island</option>
    <option value='Andorra'>Andorra</option>
    <option value='United Arab Emirates'>United Arab Emirates</option>
    <option value='Afghanistan'>Afghanistan</option>
    <option value='Antigua And Barbuda'>Antigua And Barbuda</option>
    <option value='Anguilla'>Anguilla</option>
    <option value='Albania'>Albania</option>
    <option value='Armenia'>Armenia</option>
    <option value='Angola'>Angola</option>
    <option value='Antarctica'>Antarctica</option>
    <option value='Argentina'>Argentina</option>
    <option value='American Samoa'>American Samoa</option>
    <option value='Austria'>Austria</option>
    <option value='Australia'>Australia</option>
    <option value='Aruba'>Aruba</option>
    <option value='Åland Islands'>Åland Islands</option>
    <option value='Azerbaijan'>Azerbaijan</option>
    <option value='Bosnia & Herzegovina'>Bosnia & Herzegovina</option>
    <option value='Barbados'>Barbados</option>
    <option value='Bangladesh'>Bangladesh</option>
    <option value='Belgium'>Belgium</option>
    <option value='Burkina Faso'>Burkina Faso</option>
    <option value='Bulgaria'>Bulgaria</option>
    <option value='Bahrain'>Bahrain</option>
    <option value='Burundi'>Burundi</option>
    <option value='Benin'>Benin</option>
    <option value='Saint Barthélemy'>Saint Barthélemy</option>
    <option value='Bermuda'>Bermuda</option>
    <option value='Brunei Darussalam'>Brunei Darussalam</option>
    <option value='Bolivia, Plurinational State Of'>Bolivia, Plurinational State Of</option>
    <option value='Bonaire, Saint Eustatius And Saba'>Bonaire, Saint Eustatius And Saba</option>
    <option value='Brazil'>Brazil</option>
    <option value='Bahamas'>Bahamas</option>
    <option value='Bhutan'>Bhutan</option>
    <option value='Bouvet Island'>Bouvet Island</option>
    <option value='Botswana'>Botswana</option>
    <option value='Belarus'>Belarus</option>
    <option value='Belize'>Belize</option>
    <option value='Canada'>Canada</option>
    <option value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands</option>
    <option value='Democratic Republic Of Congo'>Democratic Republic Of Congo</option>
    <option value='Central African Republic'>Central African Republic</option>
    <option value='Republic Of Congo'>Republic Of Congo</option>
    <option value='Switzerland'>Switzerland</option>
    <option value='Cote d'Ivoire'>Cote d'Ivoire</option>
    <option value='Cook Islands'>Cook Islands</option>
    <option value='Chile'>Chile</option>
    <option value='Cameroon'>Cameroon</option>
    <option value='China'>China</option>
    <option value='Colombia'>Colombia</option>
    <option value='Clipperton Island'>Clipperton Island</option>
    <option value='Costa Rica'>Costa Rica</option>
    <option value='Cuba'>Cuba</option>
    <option value='Cabo Verde'>Cabo Verde</option>
    <option value='Curacao'>Curacao</option>
    <option value='Christmas Island'>Christmas Island</option>
    <option value='Cyprus'>Cyprus</option>
    <option value='Czech Republic'>Czech Republic</option>
    <option value='Germany'>Germany</option>
    <option value='Diego Garcia'>Diego Garcia</option>
    <option value='Djibouti'>Djibouti</option>
    <option value='Denmark'>Denmark</option>
    <option value='Dominica'>Dominica</option>
    <option value='Dominican Republic'>Dominican Republic</option>
    <option value='Algeria'>Algeria</option>
    <option value='Ceuta, Mulilla'>Ceuta, Mulilla</option>
    <option value='Ecuador'>Ecuador</option>
    <option value='Estonia'>Estonia</option>
    <option value='Egypt'>Egypt</option>
    <option value='Western Sahara'>Western Sahara</option>
    <option value='Eritrea'>Eritrea</option>
    <option value='Spain'>Spain</option>
    <option value='Ethiopia'>Ethiopia</option>
    <option value='European Union'>European Union</option>
    <option value='Finland'>Finland</option>
    <option value='Fiji'>Fiji</option>
    <option value='Falkland Islands'>Falkland Islands</option>
    <option value='Micronesia, Federated States Of'>Micronesia, Federated States Of</option>
    <option value='Faroe Islands'>Faroe Islands</option>
    <option value='France'>France</option>
    <option value='France, Metropolitan'>France, Metropolitan</option>
    <option value='Gabon'>Gabon</option>
    <option value='United Kingdom'>United Kingdom</option>
    <option value='Grenada'>Grenada</option>
    <option value='Georgia'>Georgia</option>
    <option value='French Guiana'>French Guiana</option>
    <option value='Guernsey'>Guernsey</option>
    <option value='Ghana'>Ghana</option>
    <option value='Gibraltar'>Gibraltar</option>
    <option value='Greenland'>Greenland</option>
    <option value='Gambia'>Gambia</option>
    <option value='Guinea'>Guinea</option>
    <option value='Guadeloupe'>Guadeloupe</option>
    <option value='Equatorial Guinea'>Equatorial Guinea</option>
    <option value='Greece'>Greece</option>
    <option value='South Georgia And The South Sandwich Islands'>South Georgia And The South Sandwich Islands</option>
    <option value='Guatemala'>Guatemala</option>
    <option value='Guam'>Guam</option>
    <option value='Guinea-bissau'>Guinea-bissau</option>
    <option value='Guyana'>Guyana</option>
    <option value='Hong Kong'>Hong Kong</option>
    <option value='Heard Island And McDonald Islands'>Heard Island And McDonald Islands</option>
    <option value='Honduras'>Honduras</option>
    <option value='Croatia'>Croatia</option>
    <option value='Haiti'>Haiti</option>
    <option value='Hungary'>Hungary</option>
    <option value='Canary Islands'>Canary Islands</option>
    <option value='Indonesia'>Indonesia</option>
    <option value='Ireland'>Ireland</option>
    <option value='Israel'>Israel</option>
    <option value='Isle Of Man'>Isle Of Man</option>
    <option value='India'>India</option>
    <option value='British Indian Ocean Territory'>British Indian Ocean Territory</option>
    <option value='Iraq'>Iraq</option>
    <option value='Iran, Islamic Republic Of'>Iran, Islamic Republic Of</option>
    <option value='Iceland'>Iceland</option>
    <option value='Italy'>Italy</option>
    <option value='Jersey'>Jersey</option>
    <option value='Jamaica'>Jamaica</option>
    <option value='Jordan'>Jordan</option>
    <option value='Japan'>Japan</option>
    <option value='Kenya'>Kenya</option>
    <option value='Kyrgyzstan'>Kyrgyzstan</option>
    <option value='Cambodia'>Cambodia</option>
    <option value='Kiribati'>Kiribati</option>
    <option value='Comoros'>Comoros</option>
    <option value='Saint Kitts And Nevis'>Saint Kitts And Nevis</option>
    <option value='Korea, Democratic People's Republic Of'>Korea, Democratic People's Republic Of</option>
    <option value='Korea, Republic Of'>Korea, Republic Of</option>
    <option value='Kuwait'>Kuwait</option>
    <option value='Cayman Islands'>Cayman Islands</option>
    <option value='Kazakhstan'>Kazakhstan</option>
    <option value='Lao People's Democratic Republic'>Lao People's Democratic Republic</option>
    <option value='Lebanon'>Lebanon</option>
    <option value='Saint Lucia'>Saint Lucia</option>
    <option value='Liechtenstein'>Liechtenstein</option>
    <option value='Sri Lanka'>Sri Lanka</option>
    <option value='Liberia'>Liberia</option>
    <option value='Lesotho'>Lesotho</option>
    <option value='Lithuania'>Lithuania</option>
    <option value='Luxembourg'>Luxembourg</option>
    <option value='Latvia'>Latvia</option>
    <option value='Libya'>Libya</option>
    <option value='Morocco'>Morocco</option>
    <option value='Monaco'>Monaco</option>
    <option value='Moldova'>Moldova</option>
    <option value='Montenegro'>Montenegro</option>
    <option value='Saint Martin'>Saint Martin</option>
    <option value='Madagascar'>Madagascar</option>
    <option value='Marshall Islands'>Marshall Islands</option>
    <option value='Macedonia, The Former Yugoslav Republic Of'>Macedonia, The Former Yugoslav Republic Of</option>
    <option value='Mali'>Mali</option>
    <option value='Myanmar'>Myanmar</option>
    <option value='Mongolia'>Mongolia</option>
    <option value='Macao'>Macao</option>
    <option value='Northern Mariana Islands'>Northern Mariana Islands</option>
    <option value='Martinique'>Martinique</option>
    <option value='Mauritania'>Mauritania</option>
    <option value='Montserrat'>Montserrat</option>
    <option value='Malta'>Malta</option>
    <option value='Mauritius'>Mauritius</option>
    <option value='Maldives'>Maldives</option>
    <option value='Malawi'>Malawi</option>
    <option value='Mexico'>Mexico</option>
    <option value='Malaysia'>Malaysia</option>
    <option value='Mozambique'>Mozambique</option>
    <option value='Namibia'>Namibia</option>
    <option value='New Caledonia'>New Caledonia</option>
    <option value='Niger'>Niger</option>
    <option value='Norfolk Island'>Norfolk Island</option>
    <option value='Nigeria'>Nigeria</option>
    <option value='Nicaragua'>Nicaragua</option>
    <option value='Netherlands'>Netherlands</option>
    <option value='Norway'>Norway</option>
    <option value='Nepal'>Nepal</option>
    <option value='Nauru'>Nauru</option>
    <option value='Niue'>Niue</option>
    <option value='New Zealand'>New Zealand</option>
    <option value='Oman'>Oman</option>
    <option value='Panama'>Panama</option>
    <option value='Peru'>Peru</option>
    <option value='French Polynesia'>French Polynesia</option>
    <option value='Papua New Guinea'>Papua New Guinea</option>
    <option value='Philippines'>Philippines</option>
    <option value='Pakistan'>Pakistan</option>
    <option value='Poland'>Poland</option>
    <option value='Saint Pierre And Miquelon'>Saint Pierre And Miquelon</option>
    <option value='Pitcairn'>Pitcairn</option>
    <option value='Puerto Rico'>Puerto Rico</option>
    <option value='Palestinian Territory, Occupied'>Palestinian Territory, Occupied</option>
    <option value='Portugal'>Portugal</option>
    <option value='Palau'>Palau</option>
    <option value='Paraguay'>Paraguay</option>
    <option value='Qatar'>Qatar</option>
    <option value='Reunion'>Reunion</option>
    <option value='Romania'>Romania</option>
    <option value='Serbia'>Serbia</option>
    <option value='Russian Federation'>Russian Federation</option>
    <option value='Rwanda'>Rwanda</option>
    <option value='Saudi Arabia'>Saudi Arabia</option>
    <option value='Solomon Islands'>Solomon Islands</option>
    <option value='Seychelles'>Seychelles</option>
    <option value='Sudan'>Sudan</option>
    <option value='Sweden'>Sweden</option>
    <option value='Singapore'>Singapore</option>
    <option value='Saint Helena, Ascension And Tristan Da Cunha'>Saint Helena, Ascension And Tristan Da Cunha</option>
    <option value='Slovenia'>Slovenia</option>
    <option value='Svalbard And Jan Mayen'>Svalbard And Jan Mayen</option>
    <option value='Slovakia'>Slovakia</option>
    <option value='Sierra Leone'>Sierra Leone</option>
    <option value='San Marino'>San Marino</option>
    <option value='Senegal'>Senegal</option>
    <option value='Somalia'>Somalia</option>
    <option value='Suriname'>Suriname</option>
    <option value='South Sudan'>South Sudan</option>
    <option value='São Tomé and Príncipe'>São Tomé and Príncipe</option>
    <option value='USSR'>USSR</option>
    <option value='El Salvador'>El Salvador</option>
    <option value='Sint Maarten'>Sint Maarten</option>
    <option value='Syrian Arab Republic'>Syrian Arab Republic</option>
    <option value='Swaziland'>Swaziland</option>
    <option value='Tristan de Cunha'>Tristan de Cunha</option>
    <option value='Turks And Caicos Islands'>Turks And Caicos Islands</option>
    <option value='Chad'>Chad</option>
    <option value='French Southern Territories'>French Southern Territories</option>
    <option value='Togo'>Togo</option>
    <option value='Thailand'>Thailand</option>
    <option value='Tajikistan'>Tajikistan</option>
    <option value='Tokelau'>Tokelau</option>
    <option value='Timor-Leste, Democratic Republic of'>Timor-Leste, Democratic Republic of</option>
    <option value='Turkmenistan'>Turkmenistan</option>
    <option value='Tunisia'>Tunisia</option>
    <option value='Tonga'>Tonga</option>
    <option value='Turkey'>Turkey</option>
    <option value='Trinidad And Tobago'>Trinidad And Tobago</option>
    <option value='Tuvalu'>Tuvalu</option>
    <option value='Taiwan'>Taiwan</option>
    <option value='Tanzania, United Republic Of'>Tanzania, United Republic Of</option>
    <option value='Ukraine'>Ukraine</option>
    <option value='Uganda'>Uganda</option>
    <option value='United Kingdom'>United Kingdom</option>
    <option value='United States Minor Outlying Islands'>United States Minor Outlying Islands</option>
    <option value='United States'>United States</option>
    <option value='Uruguay'>Uruguay</option>
    <option value='Uzbekistan'>Uzbekistan</option>
    <option value='Vatican City State'>Vatican City State</option>
    <option value='Saint Vincent And The Grenadines'>Saint Vincent And The Grenadines</option>
    <option value='Venezuela, Bolivarian Republic Of'>Venezuela, Bolivarian Republic Of</option>
    <option value='Virgin Islands (British)'>Virgin Islands (British)</option>
    <option value='Virgin Islands (US)'>Virgin Islands (US)</option>
    <option value='Viet Nam'>Viet Nam</option>
    <option value='Vanuatu'>Vanuatu</option>
    <option value='Wallis And Futuna'>Wallis And Futuna</option>
    <option value='Samoa'>Samoa</option>
    <option value='Yemen'>Yemen</option>
    <option value='Mayotte'>Mayotte</option>
    <option value='South Africa'>South Africa</option>
    <option value='Zambia'>Zambia</option>
    <option value='Zimbabwe'>Zimbabwe</option>  
							</select>
							
							</td>
						</tr>
						
						<tr>
							<td align="right">Customer City:</td>
							<td><input type="text" name="c_city" value="<?php echo $city;?>"/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Contact:</td>
							<td><input type="text" name="c_contact" value="<?php echo $contact;?>"/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Address</td>
							<td><input type="text" name="c_address" value="<?php echo $address;?>"/></td>
						</tr>
						
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="update" value="Update Account" /></td>
					</tr>
					
					
					
					</table>
				
				</form>
		
		
		
	
<?php 
	if(isset($_POST['update'])){
	
		
		$ip = getIp();
		
		$customer_id = $c_id;
		
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
		$c_image = $_FILES['c_image']['name'];
		$c_image_tmp = $_FILES['c_image']['tmp_name'];
		$c_city = $_POST['c_city'];
		$c_contact = $_POST['c_contact'];
		$c_address = $_POST['c_address'];
	
		
		move_uploaded_file($c_image_tmp,"customer_images/$c_image");
		
		 $update_c = "update customer set customer_name='$c_name', customer_email='$c_email', customer_pass='$c_pass',customer_city='$c_city', customer_contact='$c_contact',customer_address='$c_address',customer_image='$c_image' where customer_id='$customer_id'";
	
		$run_update = mysqli_query($con, $update_c); 
		
		if($run_update){
		
		echo "<script>alert('Your account successfully Updated')</script>";
		echo "<script>window.open('my_account.php','_self')</script>";
		
		}
	}





?>










