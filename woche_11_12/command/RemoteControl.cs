namespace headfirst.command.remote
{
	using System;
	//
	// This is the invoker
	//
	public class RemoteControl
	{
		internal Command[] onCommands;
		internal Command[] offCommands;
		
		public RemoteControl()
		{
			onCommands = new Command[7];
			offCommands = new Command[7];
			
			Command noCommand = new NoCommand();
			for (int i = 0; i < 7; i++)
			{
				onCommands[i] = noCommand;
				offCommands[i] = noCommand;
			}
		}
		
		public virtual void  setCommand(int slot, Command onCommand, Command offCommand)
		{
			onCommands[slot] = onCommand;
			offCommands[slot] = offCommand;
		}
		
		public virtual void  onButtonWasPushed(int slot)
		{
			onCommands[slot].execute();
		}
		
		public virtual void  offButtonWasPushed(int slot)
		{
			offCommands[slot].execute();
		}
		
		public override System.String ToString()
		{
			System.Text.StringBuilder stringBuff = new System.Text.StringBuilder();
			stringBuff.Append("\n------ Remote Control -------\n");
			for (int i = 0; i < onCommands.Length; i++)
			{
				stringBuff.Append("[slot " + i + "] " + onCommands[i].Class.Name + "    " + offCommands[i].Class.Name + "\n");
			}
			return stringBuff.ToString();
		}
	}
}