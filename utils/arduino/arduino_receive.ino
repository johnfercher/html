/*
 * Hello World!
 *
 * This is the Hello World! for Arduino. 
 * It shows how to send data to the computer
 */

int pin = 13;

boolean on = false;
void setup()                    // run once, when the sketch starts
{
  Serial.begin(9600);           // set up Serial library at 9600 bps
  pinMode(pin, OUTPUT);
}

void loop(){                       // run over and over again{
    if(Serial.available()){
      int a = Serial.read();
      Serial.println(a);
      if(a == 53){
        if(on){
          on = false;
          digitalWrite(pin, HIGH);
        }else{
          digitalWrite(pin, LOW);
          on = true;
        }
      }
    }
    delay(500);
}