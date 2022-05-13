<?php

class DBController
{
    private $host = "127.0.0.1";
    private $user = "root";
    private $pass = "";
    private $dbName = "itrs";
    private $connect;
    public function connect(){
        $this->connect = mysqli_connect($this->host , $this->user , $this->pass , $this->dbName);
        if($this->connect){
//            die("error");
            echo "asd";
        }


    }

    public  function disconnect(){
        mysqli_close($this->connect);

    }

    public function insertVisitor($visitor){
        $qerey = "insert INTO visitor(ID,fname,lname,Email,password,username,avater)
                  values('$visitor->ID','$visitor->fname','$visitor->lname','$visitor->Email',
                    '$visitor->password','$visitor->username','$visitor->avater')";
        $result = mysqli_query($this->connect , $qerey);
    }
    public function insertPackage($package){
        $qerey = "insert INTO package(ID ,name ,subID ,placeID, startloc ,transporter
                                        costForOne , desc , year  , day  , month,
                                        hour ,minute )
                  values('$package->ID','$package->name','$package->subID','$package->placeID',
                  '$package->startLoc','$package->transporter','$package->costForOne','$package->desc',
                  '$package->year','$package->day','$package->month','$package->hour',
                  '$package->minute')";
        $result = mysqli_query($this->connect , $qerey);

    }
    public function insertPlace( $place){
        $qerey = "insert INTO place(ID, companyName, image,
                    country, city, street)
                  values('$place->ID','$place->companyName','$place->image',
                  '$place->country','$place->city','$place->street')";
        $result = mysqli_query($this->connect , $qerey);
    }
    public function insertSubject( $subject){

        $qerey = "insert INTO subject (name , ID ) values (  '$subject->name' , '$subject->ID' )";
        $result = mysqli_query($this->connect, $qerey);
    }
    public function insertBooking( $booking){
        $qerey = "insert INTO booking(ID,ownerID,totalCost,NumOfVisitor,
                    year, day, month, day, hour, minuit)
                  values('$booking->ID','$booking->ownerID','$booking->totalCost','$booking->NumOfVisitor',
                  '$booking->year','$booking->day','$booking->month','$booking->day',$'booking->hour','$booking->minuit')";
        $result = mysqli_query($this->connect , $qerey);
    }
    public function delVisitor($visitor){
        $query  = "delete from visitor where (ID = '$visitor->ID')";
        $result = mysqli_query($this->connect , $query);

    }
    public function delSubject($subject){
        $query  = "delete from subject where (name = '$subject->name')";
        $result = mysqli_query($this->connect , $query);

    }
    public function delPackage($package){
        $query  = "delete from package where (ID = '$package->ID')";
        $result = mysqli_query($this->connect , $query);

    }
    public function delPlace($place){
        $query  = "delete from place where (name = '$place->name')";
        $result = mysqli_query($this->connect , $query);

    }
    public function delBooking($booking){
        $query  = "delete from booking where (ID = '$booking->ID')";
        $result = mysqli_query($this->connect , $query);

    }
    public function updateSubject($ID , $subject){
        $qerey = "update subject set
                   name = '$subject->name'
               where (ID = '$ID') ";
        $result = mysqli_query($this->connect, $qerey);
    }
    public function updateVisitor($ID , $visitor){
        $qerey = "update visitor set
                   fname    = '$visitor->fname',
                   lname    = '$visitor->lname',
                   Email    = '$visitor->Email',
                   password = '$visitor->password',
                   username = '$visitor->username',
                   avater   = '$visitor->avater',
                   
               where (ID = '$ID') ";
        $result = mysqli_query($this->connect, $qerey);
    }
    public function updateAdmin($username , $admin){
        $qerey = "update admin set
                   Email    = '$admin->Email',
                   password = '$admin->password',
                   avater   = '$admin->avater',
               where (username = '$username') ";
        $result = mysqli_query($this->connect, $qerey);
    }
    public function updatePackage($ID , $package){
        $qerey = "update package set
                   name        = '$package->name',
                   subName     = '$package->subName',
                   plcename    = '$package->placeName',
                   startLoc    = '$package->startLoc',
                   transporter = '$package->transporter',
                   costForOne  = '$package->costForOne',
                   desc        = '$package->desc',
                   min         = '$package->min',
                   hour        = '$package->hour',
                   day         = '$package->day',
                   month       = '$package->month',
                   year        = '$package->year'
               where (ID = '$ID') ";
         $result = mysqli_query($this->connect, $qerey);
    }
    public function updatePlace($ID , $place){
        $qerey = "update place set              
                   companyName = '$place->companyName',
                   image       = '$place->image',
                   country     = '$place->country',
                   city        = '$place->city',
                   street      = '$place->street'
                   where (ID = '$ID')  ";
         $result = mysqli_query($this->connect, $qerey);
    }

    public function getAllVisitor(){
        $query = "select username , Email , fname , lname , avater from visitor";
        return $result = mysqli_query($this->connect , $query);
    }
    public function getOneVisitor($visitor){
        $query = "select username , Email , fname , lname , avater from visitor
                  where (name = '$visitor->name' )";
        return $result = mysqli_query($this->connect , $query);
    }
    public function getAllPackages(){
        $query = "select name , placeName , subName  , image , transporter,
                  costForOne from package";
        return $result = mysqli_query($this->connect , $query);
    }
    public function getAllSubjects(){
        $query = "select name from subject ";
        return $result = mysqli_query($this->connect , $query);
    }
    public function getAllPlaces(){
        $query = "select companyName , image , country , city , street  from places ";
        return $result = mysqli_query($this->connect , $query);
    }
    public function getAllBookings(){
        $query = "select totalCost , numOfVisitor , year ,month ,
                  day , fname ,lname , username from booking join visitor
                  on (ownerID = ID)";
        return $result = mysqli_query($this->connect , $query);
    }
    public function getOnePackage(){
        $query = "select from visitor ";
        return $result = mysqli_query($this->connect , $query);
    }
    public function getOnePlace($place){
        $query = "select companyName , image , country , city , street  from places
                  where (companyName = '$place->companyName')";
        return $result = mysqli_query($this->connect , $query);
    }
    public function getOneSubject($subject){
        $query = "select name from subject where (name = '$subject->name')";
        return $result = mysqli_query($this->connect , $query);
    }
    public function getVisitorBooking($visitor){
        $query = "select totalCost , numOfVisitor , year ,month ,
                  day , fname ,lname , username from booking, visitor
                  where (ownerID = ID and visitor.ID = '$visitor->ID' )";
        return $result = mysqli_query($this->connect , $query);
    }
    public function getPackagesByPlace($placeName){

            $query = "select name , placeName , subName  , image , transporter,
                      costForOne from packages where ( place = $placeName)";
            return $result = mysqli_query($this->connect , $query);

    }
    public function getPackagesBySubject($subjectName){
        $query = "select name , placeName , subName  , image , transporter,
                  costForOne from packages where ( place = $subjectName)";
        return $result = mysqli_query($this->connect , $query);

    }
}
class  s {
    public $name = "mit";
    public $ID = 14;

}

$t =  new DBController();
$s = new s();

$t->connect();
//$t->insertSubject($s);
$s->name = "Ai";
$t->updateSubject($s->ID ,$s );
$t->disconnect();