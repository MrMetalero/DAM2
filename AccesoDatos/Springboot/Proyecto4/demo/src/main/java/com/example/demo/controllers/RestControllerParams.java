package com.example.demo.controllers;


import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.example.demo.models.User;
import com.example.demo.models.dto.UserDto;

@RestController
@RequestMapping("/api")
public class RestControllerParams {


    @GetMapping("/detailsDTOParams")
    public UserDto mostrarDTO(
        @RequestParam String name,
        @RequestParam String lastname,
        @RequestParam (required = false) String title
        

    ){

        
        UserDto userDto = new UserDto();
        userDto.setName(name);
        userDto.setLastname(lastname);

        if (title == null) {
            userDto.setTitle("No hay título");
        }
        else{
            userDto.setTitle(title);
        }

        return userDto;

        
    }



    @GetMapping("/dtoParamsPath/{name}/{lastname}")
    public UserDto DtoParamsPath(
        @PathVariable String name,
        @PathVariable String lastname){

        UserDto userDto = new UserDto();
        userDto.setName(name);
        userDto.setLastname(lastname);

        return userDto;
    }



}
