package Kelompok2WS;


import javax.ws.rs.GET;
import javax.ws.rs.Path;
import javax.ws.rs.*;


@Path("memberkelompok2")
public class kelompok2model {
    @GET
    @Path("Member")
    public String add(@QueryParam("npm") int npm, @QueryParam("nama") String nama) {
        return (nama+""+""+"("+npm+")");
    }

    @GET
    @Path("Kata")
    public String getPenyemangat(@QueryParam("kata") String kata) {
        return kata;
    }


}
