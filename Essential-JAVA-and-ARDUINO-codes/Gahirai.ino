#include <dht11.h>
#include <SFE_BMP180.h>
#include <Wire.h>
#include <LiquidCrystal.h>
SFE_BMP180 pressure;
#define ALTITUDE 1655.0 
dht11 DHT11;
#define DHT11PIN 4
#define trigPin 3 //Sensor Echo pin connected to Arduino pin 13
#define echoPin 2 //Sensor Trip pin connected to Arduino pin 12
long duration, cm, inches, depth;
int i;
int flag=0;
float humidity;
float temperature;
float pres;
int intensity;
boolean inten;
LiquidCrystal lcd(8, 9, 10, 11, 12, 13);
void setup() {
  Serial.begin(9600);
  pinMode(5, OUTPUT);
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
  if (pressure.begin()){}
  else
  {
    Serial.println("BMP180 init fail\n\n");
    while(1); // Pause forever.
  }
  lcd.begin(16, 2);
  lcd.print("ShreStsaV");
  delay(1200);
  for(i=0;i<2;i++)
  {
    lcd.clear();
    lcd.setCursor(0, 0);
    delay(100);
    lcd.print("WATER MONITORING");
  }
  delay(3000);   
}

void loop() 
{
  hope:
  digitalWrite(trigPin, LOW);
  delayMicroseconds(5);
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  pinMode(echoPin, INPUT);
  duration = pulseIn(echoPin, HIGH);
  cm = (duration/2) / 29.1;
  inches = (duration/2) / 74;
  depth = 48-cm; 
  if (cm>500){
    lcd.clear();
    lcd.setCursor(0,0);
    lcd.print("IrregularSurface");
    goto hope;
    delay(700);
   }
  else if(cm<10){
      lcd.clear();
      lcd.setCursor(0,0);
      lcd.print("WARNING");
      digitalWrite(5, HIGH);   // turn the LED on (HIGH is the voltage level)
      delay(700);              // wait for a second
     }
  else{  
     digitalWrite(5, LOW);    // turn the LED off by making the voltage LOW
     lcd.clear();
     lcd.setCursor(0,0);  //Set cursor to first column of second row
     lcd.print("Distance"); //Print blanks to clear the row
     lcd.setCursor(0,1);   //Set Cursor again to first column of second row
     lcd.print(cm); //Print measured distance
     lcd.print(" cm");
     lcd.setCursor(7,1);
     lcd.print(inches);
     lcd.print("in");
     delay(750);
     //Depth
     lcd.clear();
     lcd.setCursor(0,0);  
     lcd.print("River Depth");
     lcd.setCursor(0,1);   
     lcd.print(depth);
     lcd.print(" cm");
   }
//  Serial.print(inches);
//  Serial.print("in, ");
//  Serial.print(cm);
//  Serial.print("cm");
//  Serial.println();
  
  delay(750);

  //while(1){Serial.println(analogRead(A0));delay(500);}
            char status;
            double T,P,p0,a;
            int chk = DHT11.read(DHT11PIN);
            switch (chk)
            {
              case DHTLIB_OK: 
              //Serial.println("OK"); 
              break;
              case DHTLIB_ERROR_CHECKSUM: 
              Serial.println("Checksum error"); 
              break;
              case DHTLIB_ERROR_TIMEOUT: 
              Serial.println("Time out error"); 
              break;
              default: 
              Serial.println("Unknown error"); 
              break;
            }
    intensity=analogRead(A0);
    if(intensity>200)
    inten=1;
    else inten=0;
    humidity=(float)DHT11.humidity;
    temperature=(float)DHT11.temperature;
    status = pressure.startTemperature();
    if (status != 0)
        {
            delay(status);
            status = pressure.getTemperature(T);
            if (status != 0)
        {
        status = pressure.startPressure(3);
        if (status != 0)
        {
        delay(status);
        status = pressure.getPressure(P,T);
        if (status != 0)
        {//lcd.print(P);
        pres=P;
        }
       }}}
  if(Serial.available()>0)
       {
        flag=Serial.read();
        if (flag=='1'){}
        else
        {
        //delay(10);
        char tempstr[7],humistr[5],presstr[7],daynight[1],distance[5],rdepth[5];
        dtostrf(temperature,6,2,tempstr);
        dtostrf(humidity,4,2,humistr);
        dtostrf(pres,6,2,presstr);
        dtostrf(inten,1,0,daynight);
        dtostrf(cm,2,0,distance);
        dtostrf(depth,2,0,rdepth);
        Serial.println(String(tempstr)+","+String(humistr)+","+String(presstr)+","+String(daynight)+","+String(distance)+","+String(rdepth));
      
        }}
     lcd.clear();
     lcd.setCursor(0,0);
     lcd.print("Temperature:");
     lcd.setCursor(0,1);
     lcd.print(temperature);
     delay(700);
     lcd.clear();
     lcd.setCursor(0,0);
     lcd.print("Humidity:");
     lcd.setCursor(0,1);
     lcd.print(humidity);
     delay(700);
      lcd.clear();
     lcd.setCursor(0,0);
     lcd.print("Pressure (AB):");
     lcd.setCursor(0,1);
     lcd.print(pres);
     delay(700);
     }
     
