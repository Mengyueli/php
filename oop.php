<?php  
	//oop Object Oriented Programming
	#创建一个类
	class Person{
		protected $name;//子类和本类可以访问
		private $email;//外部子类不可访问，本类可以
		// 静态变量
		// public static $age = 40;
		private static $age = 40;
		public static function getAge(){
			return Person::$age;
		}
		//setname
		public function setName($sbqname){
			$this->name = $sbqname;
		}
		//getname
		public function getName(){
			return $this->name;
		}
		public function setEmail($sbqemail){
			$this->email = $sbqemail;
		}
		public function getEmail(){
			return $this->email;
		}
		#构造函数(对象初始化完成，就会执行)
		public function __construct($name='henry',$email='123'){
			// echo 'Person 对象已被创建';
			$this->name = $name;
			$this->email = $email;
			#神奇变量
			// echo __CLASS__."对象已被创建";
		}
		#析构函数(对象销毁之前调用的函数)
		public function __destruct(){
			// echo __CLASS__."对象已被销毁";
		}


	}
	#创建一个对象
	// $person1 = new Person;
	//new 的时候，开辟一个内存空间
	// $person1->name = "Gao";
	// echo $person1->name;//Gao
	#可见度(外界是否可以访问到)private外界不可以访问到(解决办法：)
	// $person1->setName('little');
	// echo $person1->getName();//little

	// $person1->setEmail('155@gmail.com');
	// echo $person1->getEmail();

	#传参(构造函数里接收传参)
	// $person1 = new Person('liu','liu@gmail.com');
	// echo $person1->getName();
	
	#继承
	class Customers extends Person{
		private $salary;
		public function setSalary($salary){
			$this->salary = $salary;
		}
		public function getSalary(){
			return $this->salary;
		}
		public function setName($name){
			$this->name = $name;
		}

		public function __construct($name,$email,$salary){
			// 调用父级
			parent::__construct($name,$email);
			$this->salary = $salary;
		}

	}
	$customer = new Customers('bucky','bucky@gamil.com',3000);
	// $customer ->setSalary(3000);
	// echo $customer->getName();
	// echo $customer->getEmail();
	echo $customer->getSalary();
	// echo $customer->getName();
	//调用静态变量
	// echo Person::$age;
	// echo Person::getAge();





?>
