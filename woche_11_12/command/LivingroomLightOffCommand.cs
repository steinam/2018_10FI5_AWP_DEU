namespace headfirst.command.remote
{
	using System;
	
	public class LivingroomLightOffCommand : Command
	{
		internal Light light;
		
		public LivingroomLightOffCommand(Light light)
		{
			this.light = light;
		}
		
		public virtual void  execute()
		{
			light.off();
		}
	}
}