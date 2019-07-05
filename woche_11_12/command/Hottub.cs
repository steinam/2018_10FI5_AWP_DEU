namespace headfirst.command.remote
{
	using System;
	
	public class Hottub
	{
		virtual public int Temperature
		{
			set
			{
				this.temperature = value;
			}
			
		}
		internal bool on_Renamed_Field;
		internal int temperature;
		
		public Hottub()
		{
		}
		
		public virtual void  on()
		{
			on_Renamed_Field = true;
		}
		
		public virtual void  off()
		{
			on_Renamed_Field = false;
		}
		
		public virtual void  bubblesOn()
		{
			if (on_Renamed_Field)
			{
				System.Console.Out.WriteLine("Hottub is bubbling!");
			}
		}
		
		public virtual void  bubblesOff()
		{
			if (on_Renamed_Field)
			{
				System.Console.Out.WriteLine("Hottub is not bubbling");
			}
		}
		
		public virtual void  jetsOn()
		{
			if (on_Renamed_Field)
			{
				System.Console.Out.WriteLine("Hottub jets are on");
			}
		}
		
		public virtual void  jetsOff()
		{
			if (on_Renamed_Field)
			{
				System.Console.Out.WriteLine("Hottub jets are off");
			}
		}
		
		
		public virtual void  heat()
		{
			temperature = 105;
			System.Console.Out.WriteLine("Hottub is heating to a steaming 105 degrees");
		}
		
		public virtual void  cool()
		{
			temperature = 98;
			System.Console.Out.WriteLine("Hottub is cooling to 98 degrees");
		}
	}
}