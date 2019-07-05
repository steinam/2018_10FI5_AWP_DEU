namespace headfirst.command.remote
{
	using System;
	
	public class LightOnCommand : Command
	{
		internal Light light;
		
		public LightOnCommand(Light light)
		{
			this.light = light;
		}
		
		public virtual void  execute()
		{
			light.on();
		}
	}
}