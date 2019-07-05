namespace headfirst.command.remote
{
	using System;
	
	public class TV
	{
		internal System.String location;
		internal int channel;
		
		public TV(System.String location)
		{
			this.location = location;
		}
		
		public virtual void  on()
		{
			System.Console.Out.WriteLine("TV is on");
		}
		
		public virtual void  off()
		{
			System.Console.Out.WriteLine("TV is off");
		}
		
		public virtual void  setInputChannel()
		{
			this.channel = 3;
			System.Console.Out.WriteLine("Channel is set for VCR");
		}
	}
}