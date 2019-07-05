namespace headfirst.command.remote
{
	using System;
	
	public class HottubOnCommand : Command
	{
		internal Hottub hottub;
		
		public HottubOnCommand(Hottub hottub)
		{
			this.hottub = hottub;
		}
		
		public virtual void  execute()
		{
			hottub.on();
			hottub.heat();
			hottub.bubblesOn();
		}
	}
}