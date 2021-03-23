package com.vp3000r.arc;

import org.xmlpull.v1.XmlPullParser;
import java.util.ArrayList;


public class RallyParser {
    private ArrayList<RallyPoint> rallyPoints;
    public static int id;
    public RallyParser(){
        rallyPoints = new ArrayList<>();
    }

    public ArrayList<RallyPoint> getRallyPoints(){
        return  rallyPoints;
    }

    public boolean parse(XmlPullParser xpp){
        boolean status = true;
        RallyPoint currentRP = null;
        boolean inEntry = false;
        String textValue = "";
        id = 0;

        try{
            int eventType = xpp.getEventType();
            while(eventType != XmlPullParser.END_DOCUMENT){

                String tagName = xpp.getName();
                switch (eventType){
                    case XmlPullParser.START_TAG:
                        if("point".equalsIgnoreCase(tagName)){
                            inEntry = true;
                            currentRP = new RallyPoint();
                            currentRP.setid(id);
                        }
                        break;
                    case XmlPullParser.TEXT:
                        textValue = xpp.getText();
                        break;
                    case XmlPullParser.END_TAG:
                        if(inEntry){
                            if("point".equalsIgnoreCase(tagName)){
                                rallyPoints.add(currentRP);
                                inEntry = false;
                                id++;
                            } else if("lat".equalsIgnoreCase(tagName)){
                                currentRP.setlat(Float.parseFloat(textValue));
                            } else if("lon".equalsIgnoreCase(tagName)){
                                currentRP.setlon(Float.parseFloat(textValue));
                            } else if("isVisible".equalsIgnoreCase(tagName)){
                                currentRP.setisVisible(Boolean.getBoolean(textValue));
                            } else if("category".equalsIgnoreCase(tagName)){
                                currentRP.setcategory(Integer.parseInt(textValue));
                            } else if("lim".equalsIgnoreCase(tagName)){
                                currentRP.setlim(Integer.parseInt(textValue));
                            } else if("Tspeed".equalsIgnoreCase(tagName)){
                                currentRP.setspeedTarget(Integer.parseInt(textValue));
                            } else if("Ttime".equalsIgnoreCase(tagName)){
                                currentRP.settimeTarget(Integer.parseInt(textValue));

                            }
                        }
                        break;
                    default:
                }
                eventType = xpp.next();
            }
        }
        catch (Exception e){
            status = false;
            e.printStackTrace();
        }
        return  status;
    }
}