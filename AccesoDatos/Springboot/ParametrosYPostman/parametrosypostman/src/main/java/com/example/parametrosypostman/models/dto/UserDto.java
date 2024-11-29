package com.example.demo.models.dto;

import org.springframework.web.bind.annotation.GetMapping;

public class UserDto {
    
    private String title;
    private String name;
    private String lastname;


    public UserDto(){
    
    }
  




    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getLastname() {
        return lastname;
    }

    public void setLastname(String lastname) {
        this.lastname = lastname;
    }

  
  





    

}
