package com.mrmetalero.proyectooxidado2;

import com.badlogic.gdx.ApplicationAdapter;
import com.badlogic.gdx.Gdx;
import com.badlogic.gdx.graphics.Color;
import com.badlogic.gdx.graphics.GL20;
import com.badlogic.gdx.graphics.Texture;
import com.badlogic.gdx.graphics.g2d.Sprite;
import com.badlogic.gdx.graphics.g2d.SpriteBatch;
import com.badlogic.gdx.utils.ScreenUtils;

/** {@link com.badlogic.gdx.ApplicationListener} implementation shared by all platforms. */
public class Main extends ApplicationAdapter {
    Texture texChar1 = new Texture("stickman.png");
    Sprite sprChar1 = new Sprite(texChar1);
    private SpriteBatch batch;

    public void create(){
        batch = new SpriteBatch();


    }


public void render(){
    ScreenUtils.clear(Color.BLUE);
    batch.begin();

    batch.draw(texChar1, 50,50);

    batch.end();


    }

}
