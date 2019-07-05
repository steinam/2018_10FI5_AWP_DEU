namespace headfirst.command.remote
{
	using System;
	
	public class CeilingFanOffCommand : Command
	{
		internal CeilingFan ceilingFan;
		
		public CeilingFanOffCommand(CeilingFan ceilingFan)
		{
			this.ceilingFan = ceilingFan;
		}
		public virtual void  execute()
		{
			ceilingFan.off();
		}
	}
}