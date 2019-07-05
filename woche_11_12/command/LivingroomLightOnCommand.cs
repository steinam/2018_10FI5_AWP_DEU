namespace headfirst.command.remote
{
	using System;
	
	public class LivingroomLightOnCommand : Command
	{
		internal Light light;
		
		public LivingroomLightOnCommand(Light light)
		{
			this.light = light;
		}
		
		public virtual void  execute()
		{
			light.on();
		}
	}
}