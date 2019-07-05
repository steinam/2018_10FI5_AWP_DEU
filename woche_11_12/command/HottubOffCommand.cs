namespace headfirst.command.remote
{
	using System;
	
	public class HottubOffCommand : Command
	{
		internal Hottub hottub;
		
		public HottubOffCommand(Hottub hottub)
		{
			this.hottub = hottub;
		}
		
		public virtual void  execute()
		{
			hottub.cool();
			hottub.off();
		}
	}
}