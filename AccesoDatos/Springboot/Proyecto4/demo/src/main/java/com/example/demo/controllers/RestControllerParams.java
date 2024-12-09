package com.example.demo.controllers;


import java.util.HashMap;
import java.util.Map;

import org.springframework.beans.factory.annotation.Value;
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
   
    // @Value("#{${listadoMap}}")
    // private Map<String, Object> listadoMap;


    @GetMapping("/detailsDTOParams")
    public UserDto mostrarDTO(
        @RequestParam (required = false) String name,
        @RequestParam (required = false) String lastname,
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


    // @GetMapping("/JsonMappings")
    //  public Map<String,Object> mostrarDTO( ){
    //     Map<String,Object> mostrarMap = new HashMap<>();
       
    //     mostrarMap = listadoMap;
        

    //     return mostrarMap;
    // }
    

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
