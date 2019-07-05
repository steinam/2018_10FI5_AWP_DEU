namespace headfirst.command.remote
{
	using System;
	
	public class Stereo
	{
		virtual public int Volume
		{
			set
			{
				// code to set the volume
				// valid range: 1-11 (after all 11 is better than 10, right?)
				System.Console.Out.WriteLine(location + " Stereo volume set to " + value);
			}
			
		}
		internal System.String location;
		
		public Stereo(System.String location)
		{
			this.location = location;
		}
		
		public virtual void  on()
		{
			System.Console.Out.WriteLine(location + " stereo is on");
		}
		
		public virtual void  off()
		{
			System.Console.Out.WriteLine(location + " stereo is off");
		}
		
		public virtual void  setCD()
		{
			System.Console.Out.WriteLine(location + " stereo is set for CD input");
		}
		
		public virtual void  setDVD()
		{
			System.Console.Out.WriteLine(location + " stereo is set for DVD input");
		}
		
		public virtual void  setRadio()
		{
			System.Console.Out.WriteLine(location + " stereo is set for Radio");
		}
		
	}
}