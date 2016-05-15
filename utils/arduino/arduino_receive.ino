/*
 * Hello World!
 *
 * This is the Hello World! for Arduino. 
 * It shows how to send data to the computer
 */

int led = 13;
boolean on = false;
void setup()                    // run once, when the sketch starts
{
  Serial.begin(9600);           // set up Serial library at 9600 bps
  pinMode(led, OUTPUT);
}

void loop(){                       // run over and over again{
    if(Serial.available()){
      int a = Serial.read();
      Serial.println(a);
      if(a == 53){
        if(on){
          on = false;
          digitalWrite(led, HIGH);
        }else{
          digitalWrite(led, LOW);
          on = true;
        }
      }
    }
    delay(500);
}