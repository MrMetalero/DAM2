package com.example.demo.controllers;


import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
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
   
    @Value("#{${listadoMap}}")
    private Map<String, Object> listadoMap;

    @Value("stringMapa")
    private String stringMapa;

    @Value("#{'$(config.listadoAsignaturas)'.toUpperCase}")
    private String stringAsignaturas;

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


    //Si que va pero tengo que llamar a /api/JsonMappings
    @GetMapping("/JsonMappings")
    public Map<String,Object> mostrarDTO( ){
        Map<String,Object> mostrarMap = new HashMap<>();

        //mostrarMap.put("stringMapa", stringMapa);
        //mostrarMap = listadoMap;
        

        return mostrarMap;
    }
    


    //Tengo que probar a hacerlo un map de nuevo para ver si así me lo saca
    //como un Json porque ahora mismo no me pilla lo que debería del @Value
    @GetMapping("/listaSple")
    public List<String> mostrarLista( ){
        List<String> mostrarMap = new ArrayList<>();
        for (String string : stringAsignaturas.split(",")) {
            mostrarMap.add(string);
        }

        

        return mostrarMap;
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
