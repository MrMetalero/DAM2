package com.mrmetalero.proyectooxidado2;

import com.badlogic.gdx.ApplicationAdapter;
import com.badlogic.gdx.graphics.Texture;
import com.badlogic.gdx.graphics.g2d.SpriteBatch;
import com.badlogic.gdx.utils.ScreenUtils;
import com.mrmetalero.proyectooxidado2.playercharacter.Player;

/** {@link com.badlogic.gdx.ApplicationListener} implementation shared by all platforms. */
public class Main extends ApplicationAdapter {
    private SpriteBatch batch;
    private Texture image;
    public static Player jugador1 = new Player();
    @Override
    public void create() {
        batch = new SpriteBatch();
        image = new Texture("stickman.png");

    }

    @Override
    public void render() {
        ScreenUtils.clear(0.15f, 0.15f, 0.2f, 1f);
        batch.begin();
        batch.draw(image, 0, 0);
        batch.end();


    }

    @Override
    public void dispose() {
        batch.dispose();
        image.dispose();
    }
}
