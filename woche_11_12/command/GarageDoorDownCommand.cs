namespace headfirst.command.remote
{
	using System;
	
	public class GarageDoorDownCommand : Command
	{
		internal GarageDoor garageDoor;
		
		public GarageDoorDownCommand(GarageDoor garageDoor)
		{
			this.garageDoor = garageDoor;
		}
		
		public virtual void  execute()
		{
			garageDoor.up();
		}
	}
}