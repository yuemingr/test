import java.util.Calendar;

public class TimeTestB{
	public static void main(String[] args){
		Calendar cal = Calendar.getInstance();
		int day = cal.get(Calendar.DATE);
		int month = cal.get(Calendar.MONTH) + 1;
		int year = cal.get(Calendar.YEAR);
		int dow = cal.get(Calendar.DAY_OF_WEEK);
		int dom = cal.get(Calendar.DAY_OF_MONTH);
		int doy = cal.get(Calendar.DAY_OF_YEAR);
		
		System.out.println("time:" + cal.getTime());
		System.out.println("date:" + day);
		System.out.println("Month:" + month);
		System.out.println("year:" + year);
		System.out.println("dow:" + dow);
		System.out.println("dom:" + dom);
		System.out.println("doy" + doy);
	}
}