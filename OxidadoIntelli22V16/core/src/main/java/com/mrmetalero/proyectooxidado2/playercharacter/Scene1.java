package com.mrmetalero.proyectooxidado2.playercharacter;

import com.badlogic.gdx.Gdx;
import com.badlogic.gdx.graphics.g2d.SpriteBatch;
import com.mrmetalero.proyectooxidado2.Main;

public class Scene1
{
    float deltaTime = Gdx.graphics.getDeltaTime();
    float gravity = 9.8f;
    int[] gravityVectorDirection = new int[2];


    public void gravityPull(){
        Main.jugador1.playerSprite.translateY(gravity);


    }

}

