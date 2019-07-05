namespace headfirst.command.remote
{
	using System;
	
	public class GarageDoor
	{
		internal System.String location;
		
		public GarageDoor(System.String location)
		{
			this.location = location;
		}
		
		public virtual void  up()
		{
			System.Console.Out.WriteLine(location + " garage Door is Up");
		}
		
		public virtual void  down()
		{
			System.Console.Out.WriteLine(location + " garage Door is Down");
		}
		
		public virtual void  stop()
		{
			System.Console.Out.WriteLine(location + " garage Door is Stopped");
		}
		
		public virtual void  lightOn()
		{
			System.Console.Out.WriteLine(location + " garage light is on");
		}
		
		public virtual void  lightOff()
		{
			System.Console.Out.WriteLine(location + " garage light is off");
		}
	}
}