package com.r9software.simplemaps;

import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
//se agrego el import Button a view para listener
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    private Button mButton;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);//
        //toda modificacion despues de agregar la vista aqui arriba setContentView();
        //creamos un boton
        //lo casteamos a Button por que findView rregresa un view y un view es un padre de button asi como de muchas otras vistas.
        mButton= (Button) findViewById(R.id.mapaButton);
        //Ya lo encontro
        //ctrl+ clic en la vista para abrir el activity segund pestania de arriba
        //Ya tenemos el button
        //agregamos el intent
        //seteamos listener
        mButton.setOnClickListener(
                //lo ponemos anonimo, Ctrl SPace y te muestra las opciones
                new View.OnClickListener() {
                    @Override
                    public void onClick(View v) {
                        try {
                            //accion para ejecutar mientras el buton se clikea
                            //ponemos el intent para lo q te mande
                            //Alt intro para acceder a los imports
                            Intent i = new Intent(Intent.ACTION_VIEW, Uri.parse("google.navigation:q=New+York+NY"));
                            //nuestro context acutal es el de View no el de MainActivity, necesitamos el de MainActivity
                            MainActivity.this.startActivity(i);
                            //nos dirigira a new York, no funciona en el emulador por q no tenemos google play services. hacemos un try y catch
                        }catch(Exception e){
                            e.printStackTrace();
                        }

                    }
                }
        );
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        // Handle action bar item clicks here. The action bar will
        // automatically handle clicks on the Home/Up button, so long
        // as you specify a parent activity in AndroidManifest.xml.
        int id = item.getItemId();

        //noinspection SimplifiableIfStatement
        if (id == R.id.action_settings) {
            return true;
        }

        return super.onOptionsItemSelected(item);
    }
}
