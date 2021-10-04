<?php

$dbServername = "localhost";            //DATABASE SERVERNAME (DEFAULT = LOCALHOST)
$dbUSername = "root";                   //DATABASE USERNAME (DEFAULT = ROOT)
$dbPassword = "";                       //DATABASE PASSWORD (DEFAULT = BLANK)
$dbName = "pawDB";                      //DATABASE NAME

$connect = mysqli_connect($dbServername, $dbUSername, $dbPassword, $dbName);    //CONNECT TO THE DATABASE

if(mysqli_connect_error()){                                                     //CHECK CONNECTION
    die("Database connection failed!: " . mysqli_connect_error());              //PROMPT ERROR IF CONNECTION FAILED
}
else{
    if(mysqli_query($connect,'SELECT 1 FROM account LIMIT 1') == false){        //CHECK IF ACCOUNT TABLE EXISTS
        $createAccountTable = "CREATE TABLE Account (
            id INT(16) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(255) NOT NULL,
            middle_name VARCHAR(255) NOT NULL,
            last_name VARCHAR(255) NOT NULL,
            birthday VARCHAR(255) NOT NULL,
            gender VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            username VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            role VARCHAR(255) NOT NULL
        )";
        mysqli_query($connect, $createAccountTable);                            //CREATE ACCOUNT TABLE
    }
    if(mysqli_query($connect,'SELECT 1 FROM pet LIMIT 1') == false){        //CHECK IF ACCOUNT TABLE EXISTS
        $createPetTable = "CREATE TABLE pet (
            id INT(16) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            a_id INT(16) UNSIGNED NOT NULL,
            name VARCHAR(255) NOT NULL,
            type VARCHAR(255) NOT NULL,
            breed VARCHAR(255) NOT NULL,
            age INT(16) NOT NULL,
            gender VARCHAR(255) NOT NULL,
            description VARCHAR(255) NOT NULL,
            medical VARCHAR(255) NOT NULL,
            behavior VARCHAR(255) NOT NULL,
            rfa VARCHAR(255) NOT NULL,
            picture VARCHAR(255),
            availability VARCHAR(255) DEFAULT 'available', 

            FOREIGN KEY(a_id) REFERENCES account(id)
        )";
        if(mysqli_query($connect, $createPetTable)){
            echo "Table creation success";
        }else{
            echo "LOOOL";
        }
    }
    if(mysqli_query($connect,'SELECT 1 FROM transaction LIMIT 1') == false){        //CHECK IF TRANSACTION TABLE EXISTS
        $createTransactionTable = "CREATE TABLE transaction (
            id INT(16) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            a_id INT(16) UNSIGNED NOT NULL,
            u_id INT(16) UNSIGNED NOT NULL,
            p_id INT(16) UNSIGNED NOT NULL,
            t_date DATE NOT NULL,
            app_form VARCHAR(255),

            FOREIGN KEY(a_id) REFERENCES account(id),
            FOREIGN KEY(u_id) REFERENCES account(id),
            FOREIGN KEY(p_id) REFERENCES pet(id)

        )";
        if(mysqli_query($connect, $createTransactionTable)){
            echo "transaction table creation success";
        }else{
            echo "LOOOL";
        }
    }
    if(mysqli_query($connect,'SELECT 1 FROM v_pet LIMIT 1') == false){        //CHECK IF TRANSACTION TABLE EXISTS
        $createTransactionTable = "CREATE VIEW v_pet AS (

            SELECT p.id 'p_id', p.name 'p_name', p.type 'p_type', p.breed 'p_breed',
             p.age 'p_age', p.gender 'p_gender', p.description 'p_desc', p.medical 'p_med', 
             p.behavior 'p_behave', p.rfa 'p_rfa', p.picture 'p_pic', p.availability 'p_avail', 
             p.a_id 'a_id', t.u_id 'u_id', t.app_form 'u_form', t.t_date 'date', a.first_name 'u_fname', a.last_name 'u_lname' 
             FROM pet p 
             left outer join transaction t 
             on t.p_id=p.id 
             left outer join account a
             on t.u_id=a.id
             ORDER BY p.id
          );";
        if(mysqli_query($connect, $createTransactionTable)){
            echo "view creation success";
        }else{
            echo "no view lol";
        }
    }
}

/*
*   FUNCTIONS FOR ACCOUNT TABLE
*
*/

/**
*   BOOLEAN: Returns true if $username exists; returns false otherwise
*
*   @param string $username Username to be checked
*
*   @return bool
*/
function db_acc_usernameExists($username){
    
    $sql = "SELECT id FROM account WHERE username='$username'";
    $result = mysqli_query($GLOBALS['connect'], $sql);

    if(mysqli_num_rows($result) > 0){
        return true;
     } 
     else {
        return false;
     }
}

/**
*   BOOLEAN: Returns true if $email exists; returns false otherwise
*
*   @param string $email Email to be checked
*
*   @return bool
*/
function db_acc_emailExists($email){
 
    $sql = "SELECT id FROM account WHERE email='$email'";
    $result = mysqli_query($GLOBALS['connect'], $sql);

    if(mysqli_num_rows($result) > 0){
        return true;
     } 
     else {
        return false;
     }
}

/**
*   BOOLEAN: Creates an account. Returns true if account creation is successful; returns false otherwise
*
*   @param string $first_name First name of the user
*   @param string $middle_name Middle name of the user
*   @param string $last_name Last name of the user
*   @param string $birthday birthday of the user
*   @param string $gender gender of the user
*   @param string $email email of the user
*   @param string $username Username of the user
*   @param string $password Password of the user
*   @param string $role Role of the user
*
*   @return bool
*/
function db_acc_createAccount($first_name, $middle_name, $last_name, $birthday, $gender, $email, $username, $password, $role){
    
    $sql = "INSERT INTO account (first_name, middle_name, last_name, birthday, gender, email, username, password, role)
    VALUES ('$first_name', '$middle_name', '$last_name', '$birthday', '$gender', '$email', '$username', '$password',  '$role')";

    if(mysqli_query($GLOBALS['connect'], $sql)){
        return true;
    }
    else{
        return false;
    }
}

/**
*   ASSOCIATIVE ARRAY: Returns an associative array that contains the data of the user.
*   Each key is the column name
*
*   @param string $username mixed Username of the user
*
*   @return array
*/
function db_acc_getData($username){
    
    $sql = "SELECT * FROM account WHERE username='$username'";
    $result = mysqli_query($GLOBALS['connect'], $sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        return $row;
     } 
     else {
        return 0;
     }
}

/**
*   BOOLEAN: Returns true if username and password matched; returns false otherwise
*
*   @param string $username Username of the user
*   @param string $password Password of the user
*
*   @return bool
*/
function db_acc_login($username, $password){
    
    $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
    $result = mysqli_query($GLOBALS['connect'], $sql);

    if(mysqli_num_rows($result) > 0){
        return true;
     }
     else {
        return false;
     }
}

/**
*   BOOLEAN: Returns true if password change is successful; returns false otherwise
*
*   @param string $username Username of the user
*   @param string $newPassword New password of the user
*
*   @return bool
*/
function db_acc_changePass($username, $newPassword){
    
    $sql = "UPDATE account SET password='$newPassword' WHERE username='$username'";

    if(mysqli_query($GLOBALS['connect'], $sql)){
        return true;
    }
    else{
        return false;
    }
}

/*
*   FUNCTIONS FOR PET TABLE
*
*/

/**
 *  BOOLEAN: Creates pet. Returns true if pet creation is successfull; returns false otherwise
 * 
 *  @param int $admin_id ID of the admin
 *  @param string $pet_name Name of the pet
 *  @param string $type Pet type
 *  @param string $breed Breed of the pet
 *  @param int $age Age of the pet
 *  @param string $gender Gender of the pet
 *  @param string $description Description of the pet
 *  @param string $medical Medical history of the pet
 *  @param string $behavior Behavior of the pet
 *  @param string $rfa Reason for posting for adoption
 *  @param string $picture (OPTIONAL) Filename of the picture of the pet
 * 
 *  @return bool
 */
function db_pet_createPet($admin_id, $pet_name, $type, $breed, $age, $gender, $description, $medical, $behavior, $rfa, $picture=""){
    
    $sql = "INSERT INTO pet (a_id, name, type, breed, age, gender, description, medical, behavior, rfa, picture)
    VALUES ('$admin_id', '$pet_name', '$type', '$breed', '$age', '$gender', '$description', '$medical', '$behavior', '$rfa', '$picture')";

    if(mysqli_query($GLOBALS['connect'], $sql)){
        return true;
    }
    else{
        return false;
    }
}

/**
 *  MULTI-DIMENSIONAL ARRAY: Returns multi-dimensional array that contains pets data.  
 *  If admin id is indicated at the parameter, returns multi-dimensional array that contains pets data listed by that admin
 * 
 *  MULTI-DIMENSIONAL ARRAY STRUCTURE: array[row number][pet column name]
 * 
 *  @param int $admin_id (OPTIONAL) ID of an admin
 * 
 *  @return array
 */
function db_pet_a_pets($admin_id = -1){
    
    $has_param = ($admin_id > -1) ? "WHERE a_id=$admin_id" : "" ;
    $sql = "SELECT * FROM pet $has_param";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row_num = 0;

    while ($row = mysqli_fetch_array($query)) {
        $data_item[$row_num]['id'] = $row['id'];
        $data_item[$row_num]['a_id'] = $row['a_id'];
        $data_item[$row_num]['name'] = $row['name'];
        $data_item[$row_num]['type'] = $row['type'];
        $data_item[$row_num]['breed'] = $row['breed'];
        $data_item[$row_num]['age'] = $row['age'];
        $data_item[$row_num]['gender'] = $row['gender'];
        $data_item[$row_num]['description'] = $row['description'];
        $data_item[$row_num]['medical'] = $row['medical'];
        $data_item[$row_num]['behavior'] = $row['behavior'];
        $data_item[$row_num]['rfa'] = $row['rfa'];
        $data_item[$row_num]['picture'] = $row['picture'];
        $data_item[$row_num]['availability'] = $row['availability'];
    
        $row_num += 1;
    }
    if(empty($data_item)){
        return 0; 
    }
    else{ 
        return $data_item; 
    }
}

/**
 *  BOOLEAN: Checks if pet exists. Returns True if pet record exists; returns false otherwise
 * 
 *  @param int $admin_id ID of the admin
 *  @param string $pet_name Name of the pet
 *  @param string $pet_type Type of the pet
 *  @param string $pet_breed Breed of the pet
 * 
 *  @return bool
 */
function db_pet_petExists($pet_id,$admin_id = -1){

    $has_param = ($admin_id > -1) ? "WHERE a_id=$admin_id" : "WHERE id='$pet_id'" ;
    $sql = "SELECT * FROM pet $has_param";
    $result = mysqli_query($GLOBALS['connect'], $sql);

    if(mysqli_num_rows($result) > 0){
        return true;
    } 
    else {
        return false;
    }
}

function db_pet_search($pet_id,$admin_id = -1){
    
    $has_param = ($admin_id > -1) ? "AND a_id=$admin_id" : "" ;
    $sql = "SELECT * FROM pet WHERE id='$pet_id' $has_param";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row_num = 0;

    while ($row = mysqli_fetch_array($query)) {
        $data_item[$row_num]['id'] = $row['id'];
        $data_item[$row_num]['a_id'] = $row['a_id'];
        $data_item[$row_num]['name'] = $row['name'];
        $data_item[$row_num]['type'] = $row['type'];
        $data_item[$row_num]['breed'] = $row['breed'];
        $data_item[$row_num]['age'] = $row['age'];
        $data_item[$row_num]['gender'] = $row['gender'];
        $data_item[$row_num]['description'] = $row['description'];
        $data_item[$row_num]['medical'] = $row['medical'];
        $data_item[$row_num]['behavior'] = $row['behavior'];
        $data_item[$row_num]['rfa'] = $row['rfa'];
        $data_item[$row_num]['picture'] = $row['picture'];
        $data_item[$row_num]['availability'] = $row['availability'];
    
        $row_num += 1;
    }
    if(!empty($data_item)){
        return $data_item;
    }
    else{
        return 0;
    }
    
}

/**
*   BOOLEAN: Returns true if picture change is successful; returns false otherwise
*
*   @param int $admin_id ID of the admin
*   @param string $pet_name Pet name
*   @param string $pet_type Pet type
*   @param string $pet_breed Breed of the pet
*   @param string $picture location of the picture of the pet
*
*   @return bool
*/
function db_pet_setPicture($admin_id, $pet_name, $pet_type, $pet_breed, $picture){
    
    $sql = "UPDATE pet SET picture='$picture' WHERE a_id='$admin_id' AND name='$pet_name' AND type='$pet_type' AND breed='$pet_breed'";

    if(mysqli_query($GLOBALS['connect'], $sql)){
        echo "<script> alert('Pet picture successfully updated.'); </script>";
        return true;
    }
    else{
        return false;
    }
}

/**
 *  STRING: Returns a string that contains the filename of the picture
 * 
 *  @param string $pet_name Pet name
 *  @param string $pet_type Pet type
 *  @param string $pet_breed Breed of the pet
 *  
 *  @return string
 */
function db_pet_getPicture($pet_name, $pet_type, $pet_breed){
    $sql = "SELECT * FROM pet WHERE name='$pet_name' AND type='$pet_type' AND breed='$pet_breed'";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row = mysqli_fetch_array($query);
   
    return $row['picture'];
}

/**
*   BOOLEAN: Returns true if pet data editing is successful; returns false otherwise
*   
*   Columns: id, a_id, name, type, breed, age, gender, description, medical, behavior, rfa, picture
*
*   @param int $admin_id ID of the admin
*   @param string $pet_name Pet name
*   @param string $pet_type Pet type
*   @param string $pet_breed Breed of the pet
*   @param string $column The column of pet table that will be edited
*   @param string $value The new value of the pet data
*
*   @return bool
*/
function db_pet_editPet($admin_id, $pet_name, $pet_type, $pet_breed, $column, $value){
    $sql = "UPDATE pet SET $column='$value' WHERE a_id='$admin_id' AND name='$pet_name' AND type='$pet_type' AND breed='$pet_breed'";

    if(mysqli_query($GLOBALS['connect'], $sql)){
        return true;
    }
    else{
        return false;
    }
}


/* ********************************************************************************************************************************************************************* */
/**
 *  ARRAY: Returns associative array that contains transaction information
 *  COLUMNS: id, a_id, u_id, p_id, t_date, app_form
 * 
 *  @param int $p_id Pet ID
 *  
 *  @return bool
 */
function db_transaction_search($p_id){
    $sql = "SELECT * FROM transaction WHERE p_id=$p_id;";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row = mysqli_fetch_array($query);
    $row_num = 0;

    while ($row = mysqli_fetch_array($query)) {
        $data_item[$row_num]['id'] = $row['id'];
        $data_item[$row_num]['a_id'] = $row['a_id'];
        $data_item[$row_num]['u_id'] = $row['u_id'];
        $data_item[$row_num]['p_id'] = $row['p_id'];
        $data_item[$row_num]['t_date'] = $row['t_date'];
        $data_item[$row_num]['app_form'] = $row['app_form'];
    
        $row_num += 1;
    }
    if(empty($data_item)){
        return 0; 
    }
    else{
        return $data_item;
    }
}

/**
 *  BOOLEAN: Returns true if pet is available to adopt; returns false otherwise
 * 
 *  @param int $p_id Pet ID
 *  
 *  @return bool
 */
function db_pet_isAvailable($p_id){
    $sql = "SELECT * FROM pet WHERE id='$p_id'";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row = mysqli_fetch_array($query);
   
    if(!empty($row)){
        if($row['availability'] == 'available'){
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}

/**
 *  BOOLEAN: Returns true if pet is requested successfully; returns false otherwise
 * 
 *  @param int $p_id Pet ID
 *  @param string $u_id User's ID
 *  @param string $app_form User's application form
 *  
 *  @return bool
 */
function db_pet_request($p_id, $u_id, $app_form){

    $pet_data = db_pet_search($p_id);

    if(db_transaction_create($pet_data[0]['a_id'], $u_id, $p_id, $app_form) and db_pet_editPet($pet_data[0]['a_id'], $pet_data[0]['name'], $pet_data[0]['type'], $pet_data[0]['breed'], 'availability', 'requested')){
        return true;
    }
    else{
        return false;
    }
}

/**
 *  ******* DO NOT USE THIS FUNCTION !! ********
 *  ******* THIS FUNCTION WAS USED INSIDE db_pet_request() function, do not use explicitly !! ********
 *  BOOLEAN: Returns true if transaction was created successfully; returns false otherwise
 * 
 *  @param int $a_id Admin ID
 *  @param int $u_id User ID
 *  @param int $p_id Pet ID
 *  @param string $app_form Application form
 *  
 *  @return bool
 */
function db_transaction_create($a_id, $u_id, $p_id, $app_form){
    $date = date("Y/m/d");
    $sql = "INSERT INTO transaction (a_id, u_id, p_id, t_date, app_form)
    VALUES ($a_id, $u_id, $p_id, '$date','$app_form')";

    if(mysqli_query($GLOBALS['connect'], $sql)){
        return true;
    }
    else{
        return false;
    }
}

/**
 *  BOOLEAN: Returns true if pet's availability was set back to 'available' successfully; returns false otherwise
 * 
 *  Sets the pet availabilty to 'available', meaning that the current request has been denied
 * 
 *  @param int $a_id Admin ID
 *  @param int $p_id Pet ID
 *  @param string $pet_type Pet type
 *  @param string $pet_breed Breed of the pet
 *  
 *  @return bool
 */
function db_pet_deny($a_id, $p_id){
    //$transaction_data = db_transaction_search($p_id);
    $pet_data = db_pet_search($p_id);
    //unlink("Cutie_ASF_files/".$transaction_data[0]['app_form']);
    if(db_transaction_delete($a_id, $p_id) and db_pet_editPet($pet_data[0]['a_id'], $pet_data[0]['name'], $pet_data[0]['type'], $pet_data[0]['breed'], 'availability', 'available')){
        return true;
    }
    else{
        return false;
    }
}

/**
 *  ******* DO NOT USE THIS FUNCTION !! ********
 *  ******* THIS FUNCTION WAS USED INSIDE db_pet_deny() function, do not use explicitly !! ********
 *  BOOLEAN: Returns true if transaction was deleted successfully; returns false otherwise
 * 
 *  @param int $a_id Admin ID
 *  @param int $u_id User ID
 *  @param int $p_id Pet ID
 *  
 *  @return bool
 */
function db_transaction_delete($a_id, $p_id){
    $sql = "DELETE FROM transaction WHERE a_id=$a_id AND p_id=$p_id;";

    if(mysqli_query($GLOBALS['connect'], $sql)){
        return true;
    }
    else{
        return false;
    }
}

/**
 *  BOOLEAN: Returns true if pet's availability was set to 'available' successfully; returns false otherwise
 * 
 *  Sets the pet availabilty to 'available', meaning that the current request has been denied
 * 
 *  @param int $p_id Pet ID
 *  @param string $pet_name Pet name
 *  @param string $pet_type Pet type
 *  @param string $pet_breed Breed of the pet
 *  
 *  @return bool
 */
function db_pet_accept($a_id, $p_id){
    $sql = "UPDATE pet SET availability='adopted' WHERE id='$p_id' AND a_id='$a_id'";

    if(mysqli_query($GLOBALS['connect'], $sql)){
        return true;
    }
    else{
        return false;
    }
}

/**
 *  ARRAY: Returns associative array that contains pets
 *  COLUMNS: p_id, p_name, p_type, p_breed, p_age, p_gender, p_desc, p_med, p_behave, p_rfa, p_pic, p_avail
 * 
 *  @param int $a_id (OPTIONAL) Admin ID
 *  @param int $availability (OPTIONAL) Availability of the pet
 *  
 *  @return array
 */
function db_view_allPets($a_id = -1, $availability = ""){
    $has_param = ($a_id != -1 AND $availability != "") ? ("WHERE a_id='$a_id' AND p_avail='$availability'") : (($a_id != -1 AND $availability == "") ? "WHERE a_id='$a_id'" : (($a_id == -1 AND $availability != "") ? "WHERE p_avail='$availability'" : ""));
    $sql = "SELECT * FROM v_pet $has_param";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row_num = 0;

    while ($row = mysqli_fetch_array($query)) {
        $data_item[$row_num]['p_id'] = $row['p_id'];
        $data_item[$row_num]['p_name'] = $row['p_name'];
        $data_item[$row_num]['p_type'] = $row['p_type'];
        $data_item[$row_num]['p_breed'] = $row['p_breed'];
        $data_item[$row_num]['p_age'] = $row['p_age'];
        $data_item[$row_num]['p_gender'] = $row['p_gender'];
        $data_item[$row_num]['p_description'] = $row['p_desc'];
        $data_item[$row_num]['p_med'] = $row['p_med'];
        $data_item[$row_num]['p_behavior'] = $row['p_behave'];
        $data_item[$row_num]['p_rfa'] = $row['p_rfa'];
        $data_item[$row_num]['p_pic'] = $row['p_pic'];
        $data_item[$row_num]['p_availability'] = $row['p_avail'];
        $data_item[$row_num]['a_id'] = $row['a_id'];
    
        $data_item[$row_num]['u_id'] = $row['u_id'];
        $data_item[$row_num]['u_fname'] = $row['u_fname'];
        $data_item[$row_num]['u_lname'] = $row['u_lname'];
        $data_item[$row_num]['u_form'] = $row['u_form'];

        $data_item[$row_num]['date'] = $row['date'];

        $row_num += 1;
    }
    if(empty($data_item)){
        return 0; 
    }
    else{ 
        return $data_item; 
    }
}

/**
 *  ARRAY: Returns associative array that contains pets available
 *  COLUMNS: p_id, p_name, p_type, p_breed, p_age, p_gender, p_desc, p_med, p_behave, p_rfa, p_pic, p_avail, a_id, u_id, u_fname, u_lname, date
 * 
 *  @param int $a_id (OPTIONAL) Admin ID
 *  
 *  @return array
 */
function db_view_petsAvailable($a_id = -1){
    $has_param = ($a_id > -1) ? "AND a_id=$a_id" : "";
    $sql = "SELECT * FROM v_pet WHERE p_avail='available' $has_param";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row_num = 0;

    while ($row = mysqli_fetch_array($query)) {
        $data_item[$row_num]['p_id'] = $row['p_id'];
        $data_item[$row_num]['p_name'] = $row['p_name'];
        $data_item[$row_num]['p_type'] = $row['p_type'];
        $data_item[$row_num]['p_breed'] = $row['p_breed'];
        $data_item[$row_num]['p_age'] = $row['p_age'];
        $data_item[$row_num]['p_gender'] = $row['p_gender'];
        $data_item[$row_num]['p_description'] = $row['p_desc'];
        $data_item[$row_num]['p_med'] = $row['p_med'];
        $data_item[$row_num]['p_behavior'] = $row['p_behave'];
        $data_item[$row_num]['p_rfa'] = $row['p_rfa'];
        $data_item[$row_num]['p_pic'] = $row['p_pic'];
        $data_item[$row_num]['p_availability'] = $row['p_avail'];
        $data_item[$row_num]['a_id'] = $row['a_id'];
    
        $row_num += 1;
    }
    if(empty($data_item)){
        return 0; 
    }
    else{ 
        return $data_item; 
    }
}

/**
 *  ARRAY: Returns associative array that contains pets requested
 *  COLUMNS: p_id, p_name, p_type, p_breed, p_age, p_gender, p_desc, p_med, p_behave, p_rfa, p_pic, p_avail, a_id, u_id, u_fname, u_lname, date
 * 
 *  @param int $p_id Pet ID
 *  
 *  @return array
 */
function db_view_petsRequested($a_id = -1){
    $has_param = ($a_id > -1) ? "AND a_id=$a_id" : "";
    $sql = "SELECT * FROM v_pet WHERE p_avail='requested' $has_param";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row_num = 0;

    while ($row = mysqli_fetch_array($query)) {
        $data_item[$row_num]['p_id'] = $row['p_id'];
        $data_item[$row_num]['p_name'] = $row['p_name'];
        $data_item[$row_num]['p_type'] = $row['p_type'];
        $data_item[$row_num]['p_breed'] = $row['p_breed'];
        $data_item[$row_num]['p_age'] = $row['p_age'];
        $data_item[$row_num]['p_gender'] = $row['p_gender'];
        $data_item[$row_num]['p_description'] = $row['p_desc'];
        $data_item[$row_num]['p_med'] = $row['p_med'];
        $data_item[$row_num]['p_behavior'] = $row['p_behave'];
        $data_item[$row_num]['p_rfa'] = $row['p_rfa'];
        $data_item[$row_num]['p_pic'] = $row['p_pic'];
        $data_item[$row_num]['p_availability'] = $row['p_avail'];
        $data_item[$row_num]['a_id'] = $row['a_id'];
        
        
        $data_item[$row_num]['u_id'] = $row['u_id'];
        $data_item[$row_num]['u_fname'] = $row['u_fname'];
        $data_item[$row_num]['u_lname'] = $row['u_lname'];
        $data_item[$row_num]['u_form'] = $row['u_form'];

        $data_item[$row_num]['date'] = $row['date'];
    
        $row_num += 1;
    }
    if(empty($data_item)){
        return 0; 
    }
    else{ 
        return $data_item; 
    }
}

/**
 *  ARRAY: Returns associative array that contains pets that are adopted
 *  COLUMNS: p_id, p_name, p_type, p_breed, p_age, p_gender, p_desc, p_med, p_behave, p_rfa, p_pic, p_avail, a_id, u_id, u_fname, u_lname, date
 * 
 *  @param int $a_id (OPTIONAL) Admin ID
 *  
 *  @return array
 */
function db_view_petsAdopted($a_id = -1){
    $has_param = ($a_id > -1) ? "AND a_id=$a_id" : "";
    $sql = "SELECT * FROM v_pet WHERE p_avail='adopted' $has_param";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row_num = 0;

    while ($row = mysqli_fetch_array($query)) {
        $data_item[$row_num]['p_id'] = $row['p_id'];
        $data_item[$row_num]['p_name'] = $row['p_name'];
        $data_item[$row_num]['p_type'] = $row['p_type'];
        $data_item[$row_num]['p_breed'] = $row['p_breed'];
        $data_item[$row_num]['p_age'] = $row['p_age'];
        $data_item[$row_num]['p_gender'] = $row['p_gender'];
        $data_item[$row_num]['p_desc'] = $row['p_desc'];
        $data_item[$row_num]['p_med'] = $row['p_med'];
        $data_item[$row_num]['p_behave'] = $row['p_behave'];
        $data_item[$row_num]['p_rfa'] = $row['p_rfa'];
        $data_item[$row_num]['p_pic'] = $row['p_pic'];
        $data_item[$row_num]['p_avail'] = $row['p_avail'];
        $data_item[$row_num]['a_id'] = $row['a_id'];
        
        
        $data_item[$row_num]['u_id'] = $row['u_id'];
        $data_item[$row_num]['u_fname'] = $row['u_fname'];
        $data_item[$row_num]['u_lname'] = $row['u_lname'];
        $data_item[$row_num]['u_form'] = $row['u_form'];

        $data_item[$row_num]['date'] = $row['date'];
    
        $row_num += 1;
    }
    if(empty($data_item)){
        return 0; 
    }
    else{ 
        return $data_item; 
    }
}

/**
 *  ARRAY: Returns associative array that contains pets requested by the user
 *  COLUMNS: p_id, p_name, p_type, p_breed, p_age, p_gender, p_desc, p_med, p_behave, p_rfa, p_pic, p_avail, a_id, u_id, u_fname, u_lname, date
 * 
 *  @param int $u_id User ID
 *  
 *  @return array
 */
function db_view_u_petsRequested($u_id){
    $has_param = ($u_id > -1) ? "AND a_id=$u_id" : "";
    $sql = "SELECT * FROM v_pet WHERE p_avail='requested' $has_param";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row_num = 0;

    while ($row = mysqli_fetch_array($query)) {
        $data_item[$row_num]['p_id'] = $row['p_id'];
        $data_item[$row_num]['p_name'] = $row['p_name'];
        $data_item[$row_num]['p_type'] = $row['p_type'];
        $data_item[$row_num]['p_breed'] = $row['p_breed'];
        $data_item[$row_num]['p_age'] = $row['p_age'];
        $data_item[$row_num]['p_gender'] = $row['p_gender'];
        $data_item[$row_num]['p_description'] = $row['p_desc'];
        $data_item[$row_num]['p_med'] = $row['p_med'];
        $data_item[$row_num]['p_behavior'] = $row['p_behave'];
        $data_item[$row_num]['p_rfa'] = $row['p_rfa'];
        $data_item[$row_num]['p_pic'] = $row['p_pic'];
        $data_item[$row_num]['p_availability'] = $row['p_avail'];
        $data_item[$row_num]['a_id'] = $row['a_id'];
        
        
        $data_item[$row_num]['u_id'] = $row['u_id'];
        $data_item[$row_num]['u_fname'] = $row['u_fname'];
        $data_item[$row_num]['u_lname'] = $row['u_lname'];
        $data_item[$row_num]['u_form'] = $row['u_form'];

        $data_item[$row_num]['date'] = $row['date'];
    
        $row_num += 1;
    }
    if(empty($data_item)){
        return 0; 
    }
    else{ 
        return $data_item; 
    }
}

/**
 *  ARRAY: Returns associative array that contains pets that are adopted by the user
 *  COLUMNS: p_id, p_name, p_type, p_breed, p_age, p_gender, p_desc, p_med, p_behave, p_rfa, p_pic, p_avail, a_id, u_id, u_fname, u_lname, date
 * 
 *  @param int $u_id User ID
 *  
 *  @return array
 */
function db_view_u_petsAdopted($u_id){
    $has_param = ($u_id > -1) ? "AND a_id=$u_id" : "";
    $sql = "SELECT * FROM v_pet WHERE p_avail='adopted' $has_param";
    $query = mysqli_query($GLOBALS['connect'], $sql);
    $row_num = 0;

    while ($row = mysqli_fetch_array($query)) {
        $data_item[$row_num]['p_id'] = $row['p_id'];
        $data_item[$row_num]['p_name'] = $row['p_name'];
        $data_item[$row_num]['p_type'] = $row['p_type'];
        $data_item[$row_num]['p_breed'] = $row['p_breed'];
        $data_item[$row_num]['p_age'] = $row['p_age'];
        $data_item[$row_num]['p_gender'] = $row['p_gender'];
        $data_item[$row_num]['p_desc'] = $row['p_desc'];
        $data_item[$row_num]['p_med'] = $row['p_med'];
        $data_item[$row_num]['p_behave'] = $row['p_behave'];
        $data_item[$row_num]['p_rfa'] = $row['p_rfa'];
        $data_item[$row_num]['p_pic'] = $row['p_pic'];
        $data_item[$row_num]['p_avail'] = $row['p_avail'];
        $data_item[$row_num]['a_id'] = $row['a_id'];
        
        
        $data_item[$row_num]['u_id'] = $row['u_id'];
        $data_item[$row_num]['u_fname'] = $row['u_fname'];
        $data_item[$row_num]['u_lname'] = $row['u_lname'];
        $data_item[$row_num]['u_form'] = $row['u_form'];

        $data_item[$row_num]['date'] = $row['date'];
    
        $row_num += 1;
    }
    if(empty($data_item)){
        return 0; 
    }
    else{ 
        return $data_item; 
    }
}