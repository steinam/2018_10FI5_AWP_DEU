namespace headfirst.command.remote
{
	using System;
	
	public class LightOffCommand : Command
	{
		internal Light light;
		
		public LightOffCommand(Light light)
		{
			this.light = light;
		}
		
		public virtual void  execute()
		{
			light.off();
		}
	}
}