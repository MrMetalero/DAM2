package com.mrmetalero.proyectooxidado2.playercharacter;

import com.badlogic.gdx.graphics.Texture;
import com.badlogic.gdx.graphics.g2d.Sprite;
import com.badlogic.gdx.graphics.g2d.SpriteBatch;

public class Player {

    float speed = 15f;
    int[] directionVector = new int[2];
    SpriteBatch batch = new SpriteBatch();
    Texture image = new Texture("stickman.png");
    Sprite playerSprite = new Sprite(image);

    public Player() {


    }




}
