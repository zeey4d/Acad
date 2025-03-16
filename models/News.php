<?php
//فضاء التسمه حق الكلاس 
namespace models;





//تعريف الكلاس 

class News {

    private int $newsID;
     private Notification $notification; // 1-to-1 مع Notification

    public function __construct(int $newsID, Notification $notification) {
        $this->newsID = $newsID;
        $this->notification = $notification;
    }
    
    public function getNewsDetails(): string {
    return "News ID: {$this->newsID}";
    } 
    public function publishNews(string $content): void {
    // Publish news logic
    }


   
   
}

?>