package com.vp3000r.arc;

public class RallyPoint {
    private int id;
    private float lat;
    private float lon;
    private boolean isVisible;
    private int category;
    private int lim;
    private int speedTarget;
    private int timeTarget;


    public int getid(){
        return id;
    }
    public float getlat(){
        return lat;
    }
    public float getlon(){
        return lon;
    }
    public void setid(int id){
        this.id = id;
    }
    public void setlat(float lat){
        this.lat = lat;
    }
    public void setlon(float lon){
        this.lon = lon;
    }
    public boolean getisVisible(){
        return isVisible;
    }
    public void setisVisible(boolean isVisible){
        this.isVisible = isVisible;
    }
    public int getlim(){
        return lim;
    }
    public void setlim(int lim){
        this.lim = lim;
    }
    public void setcategory(int category){
        this.category = category;
    }
    public int getcategory(){
        return category;
    }
    public void setspeedTarget(int speedTarget){
        this.speedTarget = speedTarget;
    }
    public int getspeedTarget(){
        return speedTarget;
    }
    public int gettimeTarget(){
        return timeTarget;
    }
    public void settimeTarget(int timeTarget){
        this.timeTarget = timeTarget;
    }



    /*public String toString(){
        return  "User: " + name + " - " + age;
    }*/
}
