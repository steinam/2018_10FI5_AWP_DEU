namespace headfirst.command.remote
{
	using System;
	
	public class CeilingFan
	{
		virtual public int Speed
		{
			get
			{
				return level;
			}
			
		}
		internal System.String location = "";
		internal int level;
		public const int HIGH = 2;
		public const int MEDIUM = 1;
		public const int LOW = 0;
		
		public CeilingFan(System.String location)
		{
			this.location = location;
		}
		
		public virtual void  high()
		{
			// turns the ceiling fan on to high
			level = HIGH;
			System.Console.Out.WriteLine(location + " ceiling fan is on high");
		}
		
		public virtual void  medium()
		{
			// turns the ceiling fan on to medium
			level = MEDIUM;
			System.Console.Out.WriteLine(location + " ceiling fan is on medium");
		}
		
		public virtual void  low()
		{
			// turns the ceiling fan on to low
			level = LOW;
			System.Console.Out.WriteLine(location + " ceiling fan is on low");
		}
		
		public virtual void  off()
		{
			// turns the ceiling fan off
			level = 0;
			System.Console.Out.WriteLine(location + " ceiling fan is off");
		}
		
	}
}