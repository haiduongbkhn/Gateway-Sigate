﻿using System;
using System.Threading;
using System.Collections.Generic;
using System.Windows.Forms;

namespace Emboard
{
    static class Program
    {
        /// <summary>
        /// The main entry point for the application.
        /// </summary>
        [MTAThread]
        static void Main()
        {
            Application.Run(new Emboard());
        }
    }
}