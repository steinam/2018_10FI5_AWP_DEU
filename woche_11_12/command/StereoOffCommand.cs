namespace headfirst.command.remote
{
	using System;
	
	public class StereoOffCommand : Command
	{
		internal Stereo stereo;
		
		public StereoOffCommand(Stereo stereo)
		{
			this.stereo = stereo;
		}
		
		public virtual void  execute()
		{
			stereo.off();
		}
	}
}