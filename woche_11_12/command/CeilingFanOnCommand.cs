namespace headfirst.command.remote
{
	using System;
	
	public class CeilingFanOnCommand : Command
	{
		internal CeilingFan ceilingFan;
		
		public CeilingFanOnCommand(CeilingFan ceilingFan)
		{
			this.ceilingFan = ceilingFan;
		}
		public virtual void  execute()
		{
			ceilingFan.high();
		}
	}
}