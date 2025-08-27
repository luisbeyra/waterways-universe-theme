import Header from '@/components/Header';
import Footer from '@/components/Footer';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { GraduationCap, Users, BookOpen, Video, Download, Award, Clock, Target } from 'lucide-react';
import lessonsHero from '@/assets/lessons-hero.jpg';

const Lessons = () => {
  const curriculumModules = [
    {
      title: 'Ecosystem Biology',
      description: 'Explore Florida\'s mangrove ecosystems, biodiversity, and environmental conservation.',
      duration: '4-6 weeks',
      grade: 'Grades 6-12',
      subjects: ['Biology', 'Environmental Science'],
      icon: Target
    },
    {
      title: 'Drone Technology & Engineering', 
      description: 'Learn engineering principles through drone design, programming, and flight mechanics.',
      duration: '3-4 weeks',
      grade: 'Grades 8-12',
      subjects: ['Engineering', 'Physics', 'Technology'],
      icon: Target
    },
    {
      title: 'Genetics & DNA Engineering',
      description: 'Understand genetics fundamentals and modern biotechnology including CRISPR applications.',
      duration: '5-7 weeks', 
      grade: 'Grades 9-12',
      subjects: ['Biology', 'Chemistry', 'Biotechnology'],
      icon: Target
    },
    {
      title: 'Data Analysis & Scientific Method',
      description: 'Develop critical thinking skills through data collection, analysis, and scientific reasoning.',
      duration: '2-3 weeks',
      grade: 'Grades 7-12', 
      subjects: ['Mathematics', 'Statistics', 'Science'],
      icon: Target
    }
  ];

  const features = [
    {
      title: 'Expert-Developed Curriculum',
      description: 'Created by Academica educators with proven expertise in STEM education.',
      icon: Award
    },
    {
      title: 'Interactive Video Content',
      description: 'Engaging video lessons featuring expert interviews and real-world applications.',
      icon: Video
    },
    {
      title: 'Hands-On Activities',
      description: 'Practical exercises and experiments that reinforce theoretical concepts.',
      icon: Users
    },
    {
      title: 'Flexible Implementation',
      description: 'Adaptable content suitable for various classroom settings and schedules.',
      icon: Clock
    }
  ];

  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main className="pt-20">
        {/* Hero Section */}
        <section className="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
          <div 
            className="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style={{ backgroundImage: `url(${lessonsHero})` }}
          >
            <div className="absolute inset-0 bg-background/70 backdrop-blur-sm"></div>
          </div>
          
          <div className="relative z-10 container mx-auto px-4 text-center">
            <h1 className="text-5xl md:text-6xl font-bold mb-6 bg-gradient-hero bg-clip-text text-transparent">
              Educational Lessons
            </h1>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto mb-8">
              Comprehensive STEM curriculum designed to enhance learning through the Waterways universe. 
              Developed by Academica educators and available on the Colēgia platform.
            </p>
            <div className="flex flex-col sm:flex-row gap-4 justify-center">
              <Button 
                size="lg"
                className="bg-gradient-ocean hover:shadow-[var(--shadow-glow)] text-lg px-8 py-4"
              >
                <GraduationCap className="mr-2" size={20} />
                Access Curriculum
              </Button>
              <Button 
                variant="outline" 
                size="lg"
                className="border-accent text-accent hover:bg-accent hover:text-accent-foreground text-lg px-8 py-4"
              >
                <Download className="mr-2" size={20} />
                Download Resources
              </Button>
            </div>
          </div>
        </section>

        {/* Platform Overview */}
        <section className="py-20 bg-card">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto text-center">
              <h2 className="text-3xl font-bold mb-8 text-foreground">
                Colēgia Platform Integration
              </h2>
              <p className="text-lg text-muted-foreground mb-12">
                The Waterways educational content is seamlessly integrated with Academica's Colēgia platform, 
                providing teachers and students with a comprehensive digital learning environment.
              </p>
              
              <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
                <Card className="p-6 border-border hover:border-accent transition-all duration-300">
                  <BookOpen className="w-12 h-12 bg-gradient-ocean rounded-lg p-3 text-primary-foreground mb-4" />
                  <h3 className="text-xl font-semibold mb-3 text-foreground">For Teachers</h3>
                  <p className="text-muted-foreground">
                    Complete lesson plans, assessment tools, and professional development resources 
                    to effectively implement STEM education in your classroom.
                  </p>
                </Card>
                
                <Card className="p-6 border-border hover:border-accent transition-all duration-300">
                  <Users className="w-12 h-12 bg-gradient-mangrove rounded-lg p-3 text-primary-foreground mb-4" />
                  <h3 className="text-xl font-semibold mb-3 text-foreground">For Students</h3>
                  <p className="text-muted-foreground">
                    Interactive learning experiences, progress tracking, and collaborative tools 
                    that make STEM subjects engaging and accessible.
                  </p>
                </Card>
              </div>
            </div>
          </div>
        </section>

        {/* Curriculum Modules */}
        <section className="py-20">
          <div className="container mx-auto px-4">
            <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
              Curriculum Modules
            </h2>
            
            <div className="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
              {curriculumModules.map((module, index) => (
                <Card key={module.title} className="p-6 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)] group">
                  <div className="flex items-start justify-between mb-4">
                    <div className="w-12 h-12 bg-gradient-ocean rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                      <module.icon className="text-primary-foreground" size={24} />
                    </div>
                    <Badge className="bg-accent text-accent-foreground">
                      {module.grade}
                    </Badge>
                  </div>
                  
                  <h3 className="text-xl font-semibold mb-3 text-foreground group-hover:text-accent transition-colors duration-300">
                    {module.title}
                  </h3>
                  
                  <p className="text-muted-foreground mb-4 leading-relaxed">
                    {module.description}
                  </p>
                  
                  <div className="space-y-3">
                    <div className="flex items-center gap-2">
                      <Clock size={16} className="text-muted-foreground" />
                      <span className="text-sm text-muted-foreground">{module.duration}</span>
                    </div>
                    
                    <div className="flex flex-wrap gap-2">
                      {module.subjects.map((subject) => (
                        <Badge key={subject} variant="secondary" className="text-xs">
                          {subject}
                        </Badge>
                      ))}
                    </div>
                  </div>
                  
                  <Button 
                    className="w-full mt-4 bg-gradient-ocean hover:shadow-[var(--shadow-glow)] transition-all duration-300"
                    size="sm"
                  >
                    View Module Details
                  </Button>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Features */}
        <section className="py-20 bg-card">
          <div className="container mx-auto px-4">
            <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
              Why Choose Waterways Education?
            </h2>
            
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
              {features.map((feature, index) => (
                <Card key={feature.title} className="p-6 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)] text-center group">
                  <div className="w-16 h-16 bg-gradient-ocean rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300">
                    <feature.icon className="text-primary-foreground" size={32} />
                  </div>
                  <h3 className="text-lg font-semibold mb-3 text-foreground group-hover:text-accent transition-colors duration-300">
                    {feature.title}
                  </h3>
                  <p className="text-muted-foreground text-sm leading-relaxed">
                    {feature.description}
                  </p>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Implementation Guide */}
        <section className="py-20">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto">
              <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
                Implementation for Educators
              </h2>
              
              <div className="space-y-8">
                <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                  <div className="text-center">
                    <div className="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4 text-accent-foreground text-xl font-bold">
                      1
                    </div>
                    <h3 className="text-lg font-semibold mb-2 text-foreground">Access Platform</h3>
                    <p className="text-muted-foreground text-sm">
                      Register for the Colēgia platform and access Waterways curriculum materials.
                    </p>
                  </div>
                  
                  <div className="text-center">
                    <div className="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4 text-accent-foreground text-xl font-bold">
                      2
                    </div>
                    <h3 className="text-lg font-semibold mb-2 text-foreground">Customize Content</h3>
                    <p className="text-muted-foreground text-sm">
                      Adapt lessons to fit your classroom needs and student learning objectives.
                    </p>
                  </div>
                  
                  <div className="text-center">
                    <div className="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4 text-accent-foreground text-xl font-bold">
                      3
                    </div>
                    <h3 className="text-lg font-semibold mb-2 text-foreground">Engage Students</h3>
                    <p className="text-muted-foreground text-sm">
                      Deliver interactive lessons that connect entertainment with educational content.
                    </p>
                  </div>
                </div>
                
                <div className="text-center">
                  <Button 
                    size="lg"
                    className="bg-gradient-ocean hover:shadow-[var(--shadow-glow)] text-lg px-8 py-4"
                  >
                    Get Started Today
                  </Button>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default Lessons;