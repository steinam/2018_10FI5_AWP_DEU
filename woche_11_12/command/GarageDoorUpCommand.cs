namespace headfirst.command.remote
{
	using System;
	
	public class GarageDoorUpCommand : Command
	{
		internal GarageDoor garageDoor;
		
		public GarageDoorUpCommand(GarageDoor garageDoor)
		{
			this.garageDoor = garageDoor;
		}
		
		public virtual void  execute()
		{
			garageDoor.up();
		}
	}
}