<!DOCTYPE html>
<html>

<head>
<meta charset="ISO-8859-1">
<title>Lab 7</title>
<link href="StyleSheet.css" type="text/css" rel="stylesheet">
</head>

<body>
  <?php
  include "Header.php";
  include "Menu.php";
  include "Footer.php";
   ?>

   <div id = "content">
     <?php
     interface Employee {
       public function displayEmployeeInfo();
     }

     class Management implements Employee {
       protected $sin;
       protected $age;
       protected $salary;

       public function __construct($sin, $age, $salary){
         $this->sin = $sin;
         $this->age = $age;
         $this->salary = $salary;
       }
       public function displayEmployeeInfo(){
         echo "<b>SIN: </b>".$this->sin."<b>, Age: </b>".$this->age."<b>, Salary: </b>".$this->salary;
       }
     }

     class Manager extends Management {
       protected $adminLevel;

       public function __construct($sin, $age, $salary, $adminLevel){
         $this->sin = $sin;
         $this->age = $age;
         $this->salary = $salary;
         $this->adminLevel = $adminLevel;

         parent::__construct($sin, $age, $salary);
       }
       public function displayEmployeeInfo(){
         parent::displayEmployeeInfo();
          echo "<b>, Admin Level: </b>".$this->adminLevel."</br></br>";
       }
     }

     class Development implements Employee{
       protected $sin;
       protected $age;
       protected $salary;

       public function __construct($sin, $age, $salary){
         $this->sin = $sin;
         $this->age = $age;
         $this->salary = $salary;
       }

       public function displayEmployeeInfo(){
         echo "<b>SIN: </b>".$this->sin."<b>, Age: </b>".$this->age."<b>, Salary: </b>".$this->salary;
       }
     }

     class ITSpecialist extends Development {
       protected $projectAssigned;

       public function __construct($sin, $age, $salary, $projectAssigned){
         $this->sin = $sin;
         $this->age = $age;
         $this->salary = $salary;
         $this->projectAssigned = $projectAssigned;

         parent::__construct($sin, $age, $salary);
       }
       public function displayEmployeeInfo(){
         parent::displayEmployeeInfo();
          echo "<b>, Project Assigned: </b>".$this->projectAssigned."</br></br>";
       }
     }

     $manager1 = new Manager("123456789", "45", "110000", "MG-06");
     $manager2 = new Manager("987654321", "55", "120000", "MG-07");
     echo "<u><b>Mangager</b></u></br></br>";
     $manager1->displayEmployeeInfo();
     $manager2->displayEmployeeInfo();

     $it1 = new ITSpecialist("567451234", "35", "100000","T1SR");
     $it2 = new ITSpecialist("234451234", "30", "90000","HIMS");
     echo "<u><b>IT Specialist</b></u></br></br>";
     $it1->displayEmployeeInfo();
     $it2->displayEmployeeInfo();

     ?>
   </div>
</body>

</html>
