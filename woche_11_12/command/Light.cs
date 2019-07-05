namespace headfirst.command.remote
{
	using System;
	
	public class Light
	{
		internal System.String location = "";
		
		public Light(System.String location)
		{
			this.location = location;
		}
		
		public virtual void  on()
		{
			System.Console.Out.WriteLine(location + " light is on");
		}
		
		public virtual void  off()
		{
			System.Console.Out.WriteLine(location + " light is off");
		}
	}
}