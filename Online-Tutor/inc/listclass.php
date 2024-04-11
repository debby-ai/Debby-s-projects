<?php
//subject list

class checkboxlist{
	public function sublist()
	{
		echo'
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="kiswahili"><span>Kis</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="English"><span>English</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Math"><span>Math</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Home science"><span>Social Science</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Germany"><span>Germany</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Islamic Study"><span>Islamic Study</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Physics"><span>Physics</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Chemistry"><span>Chemistry</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Biology"><span>Biology</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="French"><span>French</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Christian religious education"><span>Christian religious education</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Geography"><span>Geography</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="History"><span>History</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Business"><span>Business</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Agriculture"><span>Statistics</span></div>
			<div class="divp35"><input type="checkbox" name="sub_list[]" value="Computer Science"><span>Computer Science</span></div>
		';
	}
	//sub list unchecked box
	public function sublistcombo()
	{
		echo'
			<select name="sublistcombo" style="width: 180px;">
					
			  <option value="None">None</option>
			  <option value="kiswahili">Kis</option>
			  <option value="English">English</option>
			  <option value="Math">Math</option>
			  <option value="Social Science">Social Science</option>
			  <option value="General Science">General Science</option>
			  <option value="Islamic Study">Islamic Study</option>
			  <option value="Physics">Physics</option>
			  <option value="Chemistry">Chemistry</option>
			  <option value="Biology">Biology</option>
			  <option value="Sociology">Sociology</option>
			  <option value="Economics">Economics</option>
			  <option value="Accounting">Accounting</option>
			  <option value="History">History</option>
			  <option value="Finance">Finance</option>
			  <option value="Statistics">Statistics</option>
			  <option value="Computer Science">Computer Science</option>
			</select>


		';
	}

	public function classlist()
	{
		echo ' 
			<div class="divp35"><input type="radio" name="class_list[]" value="Form One"><span>Form One</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Form two"><span>Form two</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="Form three"><span>form three</span></div>
			<div class="divp35"><input type="radio" name="class_list[]" value="form four"><span>form four</span></div>
			
			';
	}

	public function classlistcombo()
	{
		echo '
			<select style="width: 180px;" name="classlistcombo">
					
			  <option value="None">None</option>
			  <option value="One-Three">One-Three</option>
			  <option value="Four-Five">Four-Five</option>
			  <option value="Six-Seven">Six-Seven</option>
			  <option value="Eight">Eight</option>
			  <option value="Nine-Ten">Nine-Ten</option>
			  <option value="Eleven-Twelve">Eleven-Twelve</option>
			  <option value="College Level">College Level</option> 
			  <option value="University Level">University Level</option>
			</select>
		';
	}

	public function mediumlist()
	{
		echo '
			<div class="divp35"><input  type="radio" name="medium_list[]" value="kiswahili"><span>Kis</span></div>
			<div class="divp35"><input  type="radio" name="medium_list[]" value="English"><span>English</span></div>
			 
		';
	}

	public function mediumlistcombo()
	{
		echo '
			<select name="mediumlistcombo" style="width: 180px;">
					
			  <option value="None">None</option>
			  <option value="kiswahili">Kis</option>
			  <option value="English">English</option>
			  <option value="Any">Any</option>
			</select>
		';
	}
}

?>