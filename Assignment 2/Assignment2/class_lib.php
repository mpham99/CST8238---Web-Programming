<?php
class EventItem  {
  private $eventName;
  private $eventDate;
  private $eventDesc;
  private $eventPrice;

  public function __construct($eventName, $date, $eventDesc, $eventPrice){
    $this->eventName = $eventName;
    $this->eventDate = new DateTime($date);
    $this->eventDesc = $eventDesc;
    $this->eventPrice = $eventPrice;
  }

  public function getEventName(){
      return $this->eventName;
  }

  public function getEventDate(){
      return $this->eventDate;
  }

  public function getEventDesc(){
      return $this->eventDesc;
  }

  public function getEventPrice(){
      return $this->eventPrice;
  }
}
?>
