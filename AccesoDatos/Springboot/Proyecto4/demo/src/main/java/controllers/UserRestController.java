package controllers;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import models.User;
import models.dto.UserDto;

@RestController
@RequestMapping("/api")
public class UserRestController {
    

    @GetMapping("/llamadaDTO")
    public UserDto mostrarDTO(){
        
        User user = new User("Daniel", "Mena");
        UserDto userDto = new UserDto();
        userDto.setTitle("Hola mundo Title");
        userDto.setName(user.getName());
        userDto.setLastname(user.getLastname());

        return userDto;

        
    }



}
